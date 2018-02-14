<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CustomerDataTable;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DemoRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use function redirect;
use function view;

class CustomerController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    protected function _append_form_variables(&$data) {
        $data['statuses'] = Customer::$statuses;
    }

    protected function _save($request, $model) {
        $registerusers = (!$model->exists) ? new Customer() : Customer::find($model->id);

        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();
    }

    public function ruser() {
        $data['Model'] = new Customer();
        $this->_append_form_variables($data);

        return view('admin.customer.ruser', $data);
    }

    public function rstore(Request $request) {
        $this->_validate($request);

        $model = new Customer();
        $model->access_token = bin2hex(random_bytes(32));
        $model->created_by = Auth::user()->id;
        $this->_save($request, $model);

        $token = $model['access_token'];
//        dd($token);

        \Mail::send('admin.customer.verify', ['token' => $token], function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                    ->subject('Verify your email address');
        });


        return redirect()->to('backend/registerusers')->with('alert-success', 'Thanks for Registration!Please check your email.');
    }

    public function rindex(CustomerDataTable $dataTable) {
        $dataTable->rUsersOnly = true;
        return $dataTable->render('admin.customer.rindex');
    }

    public function redit($id) {
        $data['Model'] = Customer::find($id);

        $this->_append_form_variables($data);
        return view('admin.customer.redit', $data);
    }

    public function rupdate(Request $request, $id) {

        $model = Customer::find($id);
        $this->_save($request, $model);

        return redirect('backend/registerusers')->with('alert-success', 'successfully updated!');
    }

    public function rdestroy($id) {
        $model = Customer::find($id)->delete();

        redirect('backend/registerusers')->with('alert-success', 'successfully deleted!');
    }

    public function index(CustomerDataTable $dataTable) {
        $dataTable->CUserOnly = true;
        return $dataTable->render('admin.customer.index');
    }

    protected function _validate($request, $id = null) {
        $rules = [
            'name' => 'required',
            'company_name' => 'required',
            'email' => "required|email",
            'phone' => 'required',
        ];
        $this->validate($request, $rules);
    }

    public function confirm($token) {
        if (!$token) {
            throw new InvalidConfirmationCodeException;
        }

        $user = Customer::whereAccessToken($token)->first();


        if (!$user) {
            throw new InvalidConfirmationCodeException;
        }

        $user->status = 1;
//        $user->access_token = null;
        $user->save();

        return redirect('backend/registerusers')->with('alert-success', 'You have successfully verified your account.');
    }

    public function dview($id) {
        $data['Customer'] = Customer::find($id);
        $data['Demo'] = DemoRequest::where('customer_id', $id)->first();

        return view('admin.customer.dview', $data);
    }

    public function upgradecustomer($id) {
        $data['Customer'] = Customer::find($id);
        return view('admin.customer.upgradecustomer', $data);
    }

    protected function _ucvalidate($request) {
        $rules = [
            'plan_name' => 'required',
            'plan_price' => 'required',
            'service_availability' => "required",
        ];
        $this->validate($request, $rules);
    }

    public function upgradecustomerstore(Request $request,$id) {
        $this->_ucvalidate($request);
        $customer = Customer::find($id); 
        $data = $request->only(['plan_name', 'plan_price', 'service_availability','start_date','end_date']);
        $customer->plan_name = $request->plan_name;
        $customer->plan_price = $request->plan_price;
        $customer->service_availability = $request->service_availability;
        $customer->start_date = $request->start_date;
        $customer->end_date = $request->end_date;
//        $customer->fill($data);
        $customer->status = 2;
        $customer->save();
        
        return redirect('backend/customers')->with('alert-success', 'You have successfully upgraded customer');
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CustomerDataTable;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DemoRequest;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use function random_bytes;
use function redirect;
use function view;

class CustomerController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
//    protected function _append_form_variables(&$data) {
//        $data['statuses'] = Customer::$statuses;
//    }

    protected function _save($request, $model) {
        $registerusers = (!$model->exists) ? new Customer() : Customer::find($model->id);

        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();
    }

    public function ruser() {
        $data['Model'] = new Customer();
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Register Users', 'registerusers');
        $data['breadcrumbs']->addCrumb('Create Register Users', '');
        $data['breadcrumbs']->setDivider('>');
//        $this->_append_form_variables($data);

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

        \Mail::send('site.customer.verify', ['token' => $token], function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                    ->subject('Verify your email address');
        });


        return redirect()->to('admin/registerusers')->with('alert-success', 'Thanks for Registration!Please check your email.');
    }

    public function rindex(CustomerDataTable $dataTable) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Register Users', '');
        $data['breadcrumbs']->setDivider('>');
        $dataTable->rUsersOnly = true;
        return $dataTable->render('admin.customer.rindex', $data);
    }

    public function redit($id) {
        $data['Model'] = Customer::find($id);
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        if ($data['Model']->status == 1) {
            $data['breadcrumbs']->addCrumb('Register Users', 'registerusers');
        } elseif ($data['Model']->status == 2) {
            $data['breadcrumbs']->addCrumb('Customers', 'customers');
        }
        $data['breadcrumbs']->addCrumb('Edit Register User', '');
        $data['breadcrumbs']->setDivider('>');

//        $this->_append_form_variables($data);
        return view('admin.customer.redit', $data);
    }

    public function rupdate(Request $request, $id) {

        $model = Customer::find($id);
        $this->_save($request, $model);

        return redirect('admin/registerusers')->with('alert-success', 'successfully updated!');
    }

    public function rdestroy($id) {
        $model = Customer::find($id)->delete();

        redirect('admin/registerusers')->with('alert-success', 'successfully deleted!');
    }

    public function index(CustomerDataTable $dataTable) {
        $dataTable->CUserOnly = true;
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Customers', '');
        $data['breadcrumbs']->setDivider('>');
        return $dataTable->render('admin.customer.index', $data);
    }

    protected function _validate($request, $id = null) {
        $rules = [
            'name' => 'required',
            'company_name' => 'required',
            'email' => "required|email",
            'phone' => 'required|numeric',
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

        return redirect('demorequest/' . $token)->with('alert-success', 'You have successfully verified your account.');
    }

    public function view(Request $request, $id) {
        $data['Customer'] = Customer::find($id);
        $data['Demoform'] = $data['Customer']->demorequests()->count();
        $data['Demos'] = $data['Customer']->demorequests;
        $data['Demo'] = DemoRequest::where('customer_id', '=', $id)->first();
        $data['comments'] = $request->only(['admin_comments']);
        if ($data['comments']) {
            $data['Customer']->fill($data['comments']);
            $data['Customer']->save();
            return redirect()->back();
        }
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        if ($data['Customer']->status == 1) {
            $data['breadcrumbs']->addCrumb('Register Users', 'registerusers');
        } elseif ($data['Customer']->status == 2) {
            $data['breadcrumbs']->addCrumb('Customers', 'customers');
        }
        $data['breadcrumbs']->addCrumb('View', '');
        $data['breadcrumbs']->setDivider('>');
        return view('admin.customer.view', $data);
    }

    public function upgradecustomer($id) {
        $data['Customer'] = Customer::find($id);
        $data['Plan_names'] = Customer::$plan_names;
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Register Users', 'registerusers');
        $data['breadcrumbs']->addCrumb('Upgrade To Customer', '');
        $data['breadcrumbs']->setDivider('>');
        return view('admin.customer.upgradecustomer', $data);
    }

    protected function _ucvalidate($request) {
        $rules = [
            'plan_name' => 'required',
            'plan_price' => 'required',
        ];
        $this->validate($request, $rules);
    }

    public function upgradecustomerstore(Request $request, $id) {
        $this->_ucvalidate($request);
        $customer = Customer::find($id);
        $data = $request->only(['plan_name', 'plan_price', 'start_date', 'end_date']);
        $customer->fill($data);
        $customer->status = 2;
        $customer->save();

        return redirect('admin/customers')->with('alert-success', 'You have successfully upgraded customer');
    }

//    public function demorequest($token) {
//        $data['Customer'] = Customer::where('access_token', $token)->first();
//        $data['Model'] = new DemoRequest();
//
//        return view('admin.customer.demorequest', $data);
//    }
//    protected function _dvalidate($request) {
//
//        $rules = [
//            'location' => "required",
//            'preferred_date' => 'required',
//            'schedule_time' => 'required',
//            'person_incharge' => 'required',
//        ];
//        $this->validate($request, $rules);
//    }
//    public function dstore(Request $request) {
//        $this->_dvalidate($request);
//
//        $model = new DemoRequest();
//        $data = $request->except(['_token', 'company_name']);
//        $model->fill($data);
//        $model->save();
//
//        $customer = Customer::find($model->customer_id);
//        $customer->access_token = null;
//        $customer->save();
//
//        return redirect('/admin/registerusers')->with('alert-success', 'Thanks for your Demo request!');
//    }
}

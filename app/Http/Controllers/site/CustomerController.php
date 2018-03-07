<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DemoRequest;
use App\Traits\CaptchaTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
    use CaptchaTrait;

    protected function _save($request, $model) {
        $registerusers = (!$model->exists) ? new Customer() : Customer::find($model->id);

        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();
    }

    public function ruser() {
        $data['Model'] = new Customer();

        return view('site.customer.ruser', $data);
    }

    public function rstore(Request $request) {
        $this->_validate($request);

        $model = new Customer();
        $model->access_token = bin2hex(random_bytes(32));
        $model->created_by = null;
        $this->_save($request, $model);

        $token = $model['access_token'];
//        dd($token);

        \Mail::send('site.customer.verify', ['token' => $token], function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                    ->subject('Verify your email address');
        });


        return redirect()->to('registerusers')->with('alert-success', 'Thanks for Registration!Please check your email.');
    }

    public function index() {
        return view('site.customer.index');
    }

    protected function _validate($request, $id = null) {

        \NoCaptcha::shouldReceive('verifyResponse')
                ->once()
                ->andReturn(true);

        $rules = [
            'name' => 'required',
            'company_name' => 'required',
            'email' => "required|email",
            'phone' => 'required|numeric',
            'g-recaptcha-response' => 'required|captcha',
        ];
        $custom_msg = [
            'g-recaptcha-response.required' => 'The Captcha field is required',
        ];
        $this->validate($request, $rules, $custom_msg);
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

    public function demorequest($token) {
        $data['Customer'] = Customer::where('access_token', $token)->first();
        $data['Model'] = new DemoRequest();

        return view('site.customer.demorequest', $data);
    }

    protected function _dvalidate($request) {

        $rules = [
            'location' => "required",
            'preferred_date' => 'required',
            'schedule_time' => 'required',
            'person_incharge' => 'required',
        ];
        $this->validate($request, $rules);
    }

    public function dstore(Request $request) {
        $this->_dvalidate($request);

        $model = new DemoRequest();
        $data = $request->except(['_token', 'company_name']);
        $model->fill($data);
        $model->save();

        $customer = Customer::find($model->customer_id);
        $customer->access_token = null;
        $customer->save();

        return redirect('/')->with('alert-success', 'Thanks for your Demo request!');
    }

}

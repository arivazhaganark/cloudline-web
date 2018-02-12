<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Customer;
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
        $model->created_by = \Auth::user()->id;
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
        
        $request['captcha'] = $this->captchaCheck();
        
        $rules = [
            'name' => 'required',
            'company_name' => 'required',
            'email' => "required|email",
            'phone' => 'required',
            'g-recaptcha-response'  => 'required',
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
        $user->access_token = null;
        $user->save();

        return redirect('registerusers')->with('alert-success', 'You have successfully verified your account.');
    }

}

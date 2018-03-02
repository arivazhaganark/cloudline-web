<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use App\Traits\CaptchaTrait;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use function bcrypt;
use function redirect;
use function view;

class PartnerController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    use CaptchaTrait;

    protected function _append_form_variables(&$data) {
        $data['types'] = Partner::$types;
        $data['focus'] = Partner::$focuses;
    }

    public function index() {
        return view('site.partner.index');
    }

    public function create() {
        $data['Model'] = new Partner();
        $this->_append_form_variables($data);

        return view('site.partner.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);

        $model = new Partner();
        $model->confirmation_code = bin2hex(random_bytes(32));
        $this->_save($request, $model);

        $code = $model['confirmation_code'];

        \Mail::send('site.partner.verify', ['code' => $code], function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                    ->subject('Verify your email address');
        });

        return back()->with('alert-success', 'Thanks for Registration!Please check your email.');
    }

    protected function _save($request, $model) {
        $user = (!$model->exists) ? new User() : User::find($model->user_id);
        $userdata = $request->only(['name', 'email', 'password']);
        if (!empty($userdata['password'])) {
            $userdata['password'] = bcrypt($userdata['password']);
        } else {
            unset($userdata['password']);
        }
        $userdata['role'] = 'P';
        $user->fill($userdata);
        $user->save();

        $data = $request->except(['_token', 'name', 'email', 'password']);
        $data['user_id'] = $user->id;
        $model->fill($data);
        $model->save();
    }

    public function confirm($code) {
        if (!$code) {
            throw new InvalidConfirmationCodeException;
        }

        $partner = Partner::whereConfirmationCode($code)->first();


        if (!$partner) {
            throw new InvalidConfirmationCodeException;
        }

        $partner->confirmation_code = null;
        $partner->save();

        return redirect('partner')->with('alert-success', 'You have successfully verified your account.');
    }

    protected function _validate($request, $id = null, $uid = null) {

        \NoCaptcha::shouldReceive('verifyResponse')
                ->once()
                ->andReturn(true);

        $rules = [
            'partner_type' => 'required',
            'company_name' => 'required',
            'name' => 'required',
            'email' => "required|email|unique:users,email,{$uid},id",
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'years_business' => 'required',
            'no_of_sales' => 'required',
            'no_of_technical' => 'required',
            'annual_revenue' => 'required',
            'sales_territory' => 'required',
            'current_focus' => 'required',
            'products_offered' => 'required',
            'brands_deal' => 'required',
            'g-recaptcha-response' => 'required',
        ];
        if (!$id) { // On Create
            $rules['password'] = 'required';
        }
        $this->validate($request, $rules);
    }

}

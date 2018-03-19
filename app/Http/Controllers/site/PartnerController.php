<?php

namespace App\Http\Controllers\site;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DemoRequest;
use App\Models\Partner;
use App\Models\User;
use App\Traits\CaptchaTrait;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use function back;
use function bcrypt;
use function random_bytes;
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
            'phone' => 'required|numeric',
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
        $custom_msg = [
            'g-recaptcha-response.required' => 'The Captcha field is required',
        ];
        $this->validate($request, $rules, $custom_msg);
    }

    public function home(UserDataTable $dataTable) {
        return $dataTable->render('site.partner.home', compact('breadcrumbs'));
    }

    public function ruser() {
        $data['Model'] = new Customer();
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Home', 'partner/home');
        $data['breadcrumbs']->addCrumb('Create User', 'view');
        $data['breadcrumbs']->setDivider('»');

        return view('site.partner.ruser', $data);
    }

    public function rstore(Request $request) {
        $this->_rvalidate($request);
        $model = new Customer();
        $model->access_token = bin2hex(random_bytes(32));
        $model->created_by = \Auth::user()->id;
        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();

        $token = $model['access_token'];
//        dd($token);

        \Mail::send('site.customer.verify', ['token' => $token], function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                    ->subject('Verify your email address');
        });


        return redirect()->back()->with('alert-success', 'Thanks for Registration!Please check your email.');
    }

    protected function _rvalidate($request, $id = null) {
        $rules = [
            'name' => 'required',
            'company_name' => 'required',
            'email' => "required|email",
            'phone' => 'required|numeric',
        ];
        $this->validate($request, $rules);
    }

    public function view(Request $request, $id) {
        $data['Customer'] = Customer::find($id);
        $data['Demoform'] = $data['Customer']->demorequests()->count();
        $data['Demos'] = $data['Customer']->demorequests;
        $data['Demo'] = DemoRequest::where('customer_id', '=', $id)->first();
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Home', 'partner/home');
        $data['breadcrumbs']->addCrumb('View', 'view');
        $data['breadcrumbs']->setDivider('»');
        return view('site.partner.view', $data);
    }

    public function redit($id) {
        $data['Model'] = Customer::find($id);
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Home', 'partner/home');
        $data['breadcrumbs']->addCrumb('Edit User', 'view');
        $data['breadcrumbs']->setDivider('»');

        return view('site.partner.redit', $data);
    }

    public function rupdate(Request $request, $id) {

        $model = Customer::find($id);
        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();

        return redirect('partner/home')->with('alert-success', 'successfully updated!');
    }

    public function rdestroy($id) {
        $model = Customer::find($id)->delete();

        redirect('partner/home')->with('alert-success', 'successfully deleted!');
    }

    public function myprofile(Request $request) {
        $id = \Auth::user()->id;
        $data['Model'] = User::find($id);
        if ($request->post()) {
            $userdata = $request->only(['name', 'email', 'password']);
            if (!empty($userdata['password'])) {
                $userdata['password'] = bcrypt($userdata['password']);
            } else {
                unset($userdata['password']);
            }
            $data['Model']->fill($userdata);
            $data['Model']->save();
            return redirect('admin')->with('alert-success', 'successfully updated!');
        }
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Home', 'partner/home');
        $data['breadcrumbs']->addCrumb('My Profile', 'view');
        $data['breadcrumbs']->setDivider('»');

        return view('site.partner.my_profile', $data);
    }

}

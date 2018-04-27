<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\User;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function bcrypt;
use function redirect;
use function view;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index() {
        $data['partners_count'] = Partner::count();
        $data['registerusers_count'] = Customer::where('status', '=', 1)->count();
        $data['customers_count'] = Customer::where('status', '=', 2)->count();
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Dashboard', '');
        $data['breadcrumbs']->setDivider('');        
        return view('admin.home', $data);
    }

    public function myprofile(Request $request) {
        $id = \Auth::user()->id;
        $data['Model'] = User::find($id);
        if ($request->post()) {
            $this->_save($request, $data['Model']);
            return redirect('admin')->with('alert-success', 'successfully updated!');
        }
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('My Profile', '');
        $data['breadcrumbs']->setDivider(''); 

        return view('admin.my_profile', $data);
    }

    protected function _save($request, $model) {
        $users = (!$model->exists) ? new User() : User::find($model->id);

        $userdata = $request->only(['name', 'email', 'password']);
        if (!empty($userdata['password'])) {
            $userdata['password'] = bcrypt($userdata['password']);
        } else {
            unset($userdata['password']);
        }
        $model->fill($userdata);
        $model->save();
    }

    public function settings(Request $request) {

        $data['Model'] = Setting::where("name", "CONTACT")->first();
        if ($request->post()) {
            $values = $request->except(['_token']);
            $data['Model']->fill($values);
            $data['Model']->save();
            return redirect('admin/settings')->with('alert-success', 'Contact was successful updated!');
        }
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Settings', '');
        $data['breadcrumbs']->setDivider('');

        return view('admin.settings', $data);
    }

}

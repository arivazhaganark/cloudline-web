<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\User;
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
    public function index() {
        $data['partners_count'] = Partner::count();
        $data['registerusers_count'] = Customer::where('status','=',1)->count();
        $data['customers_count'] = Customer::where('status','=',2)->count();
        return view('admin.home',$data);
    }

    public function myprofile(Request $request) {
        $id = \Auth::user()->id;
        $data['Model'] = User::find($id);
        if ($request->post()) {
            $this->_save($request, $data['Model']);
            return redirect('admin/home')->with('alert-success', 'successfully updated!');
        }

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

        return view('admin.settings', $data);
    }

}

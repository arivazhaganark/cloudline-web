<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use function redirect;
use function view;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index() {
        return view('admin.home');
    }

    public function myprofile(Request $request) {
        $id = \Auth::user()->id;
        $data['Model'] = User::find($id);
        if ($request->post()) {
            $this->_save($request, $data['Model']);
            return redirect('backend/home')->with('alert-success', 'successfully updated!');
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

}

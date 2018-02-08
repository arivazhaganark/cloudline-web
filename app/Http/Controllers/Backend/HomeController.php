<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Response;
use Yajra\DataTables\Utilities\Request;
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

    public function my_profile($id) {
        $data['Model'] = User::find($id);

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

    public function my_profile_update(Request $request, $id) {

        $model = User::find($id);
        $this->_save($request, $model);

        return redirect('backend/home')->with('alert-success', 'successfully updated!');
    }

}

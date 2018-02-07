<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\PartnerDataTable;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Request;
use function bcrypt;
use function redirect;
use function view;

class PartnerController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(PartnerDataTable $dataTable) {
        return $dataTable->render('admin.partner.index');
    }

    protected function _append_form_variables(&$data) {
        $data['types'] = Partner::$types;
        $data['focus'] = Partner::$focuses;
    }

    public function create() {
        $data['Model'] = new Partner();
        $this->_append_form_variables($data);

        return view('admin.partner.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);

        $model = new Partner();
        $this->_save($request, $model);

        return redirect()->to('backend/partners')->with('message', 'Thanks for Registration!');
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

    public function edit($id) {
        $data['Model'] = Partner::with('user')->find($id);
        $data['User'] = $data['Model']->user;

        $this->_append_form_variables($data);
        return view('admin.partner.edit', $data);
    }

    public function update(Request $request, $id) {
        $this->_validate($request, $id, $request->uid);

        $model = Partner::find($id);
        $this->_save($request, $model);

        return redirect('backend/partners')->with('alert-success', 'successfully updated!');
    }

    public function destroy($id) {
        $model = Partner::find($id)->delete();

        redirect('backend/partners')->with('alert-success', 'successfully deleted!');
    }

    protected function _validate($request, $id = null, $uid = null) {
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
        ];
        if (!$id) { // On Create
            $rules['password'] = 'required';
        }
        $this->validate($request, $rules);
    }

}

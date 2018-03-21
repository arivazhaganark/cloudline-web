<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\PartnerDataTable;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(PartnerDataTable $dataTable) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Partners', '');
        $data['breadcrumbs']->setDivider('>');
        return $dataTable->render('admin.partner.index', $data);
    }

    protected function _append_form_variables(&$data) {
        $data['types'] = Partner::$types;
        $data['focus'] = Partner::$focuses;
    }

    public function create() {
        $data['Model'] = new Partner();
        $this->_append_form_variables($data);
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Partners', 'partners');
        $data['breadcrumbs']->addCrumb('Create Partner', '');
        $data['breadcrumbs']->setDivider('>');

        return view('admin.partner.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);

        $model = new Partner();
        $model->confirmation_code = bin2hex(random_bytes(32));
        $this->_save($request, $model);

        $code = $model['confirmation_code'];
//        dd($token);

        \Mail::send('site.partner.verify', ['code' => $code], function($message) {
            $message->to(Input::get('email'), Input::get('name'))
                    ->subject('Verify your email address');
        });

        return redirect()->back()->with('alert-success', 'Thanks for Registration!Please check your email.');
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
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Partners', 'partners');
        $data['breadcrumbs']->addCrumb('Edit Partner', '');
        $data['breadcrumbs']->setDivider('>');

        $this->_append_form_variables($data);
        return view('admin.partner.edit', $data);
    }

    public function update(Request $request, $id) {
        $this->_validate($request, $id, $request->uid);

        $model = Partner::find($id);
        $this->_save($request, $model);

        return redirect('admin/partners')->with('alert-success', 'successfully updated!');
    }

    public function destroy($id) {
        $partner = Partner::find($id);
        $usermodel = User::where('id', $partner->user_id)->delete();
        $partner->delete();

        redirect('admin/partners')->with('alert-success', 'successfully deleted!');
    }

    protected function _validate($request, $id = null, $uid = null) {
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
        ];
        if (!$id) { // On Create
            $rules['password'] = 'required';
        }
        $this->validate($request, $rules);
    }

}

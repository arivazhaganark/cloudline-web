<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\PartnerDataTable;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Reseller;
use App\Models\ResellerBankDetail;
use App\Models\ResellerContactDetail;
use App\Models\ResellerOfficeDetail;
use App\Models\ResellerTradeDetail;
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
        $data['breadcrumbs']->setDivider('');
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
        $data['breadcrumbs']->setDivider('');

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
        $data['breadcrumbs']->setDivider('');

        $this->_append_form_variables($data);
        return view('admin.partner.edit', $data);
    }

    public function update(Request $request, $id) {
        $this->_validate($request, $id, $request->uid);

        $model = Partner::find($id);
        $this->_save($request, $model);

        return redirect('admin/partners')->with('alert-success', 'successfully updated!');
    }

    public function show($id) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Partners', 'partners');
        $data['breadcrumbs']->addCrumb('View Partner', '');
        $data['breadcrumbs']->setDivider('');
        $data['Model'] = Partner::find($id);
        $user_id = $data['Model']->user_id;
        $data['User'] = User::where('id', '=', $user_id)->first();
        $data['reseller'] = Reseller::where('user_id', '=', $user_id)->first();
        if ($data['reseller']) {
            $reseller_id = $data['reseller']->id;
            $data['proprietor'] = ResellerContactDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'proprietor']])->first();
            $data['partner'] = ResellerContactDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'partner']])->first();
            $data['director'] = ResellerContactDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'director']])->first();
            $data['sales'] = ResellerOfficeDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'sales']])->first();
            $data['accounts'] = ResellerOfficeDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'accounts']])->first();
            $data['logistics'] = ResellerOfficeDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'logistics']])->first();
            $data['tech'] = ResellerOfficeDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'tech']])->first();
            $data['support'] = ResellerOfficeDetail::where([['reseller_id', '=', $reseller_id], ['type', '=', 'support']])->first();
            $data['bank_ref'] = ResellerBankDetail::where('reseller_id', '=', $reseller_id)->first();
            $data['trade_ref1'] = ResellerTradeDetail::where([['type', '=', 1], ['reseller_id', '=', $reseller_id]])->first();
            $data['trade_ref2'] = ResellerTradeDetail::where([['type', '=', 2], ['reseller_id', '=', $reseller_id]])->first();
        }
        return view('admin.partner.view', $data);
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

    public function approve($id) {
        $model = Partner::find($id);
        $model->status = 1;
        $model->save();

        $status = $model['status'];
        $name = $model->user->name;

        \Mail::send('admin.partner.mail', ['status' => $status, 'name' => $name], function($message) use($model) {
            $message->to($model->user->email)
                    ->subject('Cloudline Partner Registration');
        });

        return redirect('admin/partners')->with('alert-success', 'Partner is Successfully Approved!');
    }

    public function decline($id) {
        $model = Partner::find($id);
        $model->status = 2;
        $model->save();

        $status = $model['status'];
        $name = $model->user->name;

        \Mail::send('admin.partner.mail', ['status' => $status, 'name' => $name], function($message) use($model) {
            $message->to($model->user->email)
                    ->subject('Cloudline Partner Registration');
        });

        return redirect('admin/partners')->with('alert-success', 'Partner is Successfully Declined!');
    }

}

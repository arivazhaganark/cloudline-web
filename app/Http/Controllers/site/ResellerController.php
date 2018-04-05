<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Reseller;
use App\Models\ResellerBankDetail;
use App\Models\ResellerContactDetail;
use App\Models\ResellerFile;
use App\Models\ResellerOfficeDetail;
use App\Models\ResellerTradeDetail;
use App\Models\Setting;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function base_path;
use function redirect;
use function view;

class ResellerController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index() {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Home', 'partner/home');
        $data['breadcrumbs']->addCrumb('Reseller Account', 'partner/reseller');
        $data['breadcrumbs']->setDivider('»');
        $auth = \Auth::user()->id;
        $data['Reseller'] = Reseller::whereUserId($auth)->first();
        return view('site.reseller.index', $data);
    }

    protected function _append_form_variables(&$data) {
        $data['types'] = Reseller::$types;
        $data['collaterals'] = ResellerBankDetail::$collaterals;
    }

    public function create() {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Reseller', 'partner/reseller');
        $data['breadcrumbs']->addCrumb('Form', '');
        $data['breadcrumbs']->setDivider('»');
        $data['Reseller'] = new Reseller();
        $this->_append_form_variables($data);
        return view('site.reseller.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);
        $model = new Reseller();
        $this->_save($request, $model);

        return redirect('partner/reseller')->with('alert-success', 'Successfully created');
    }

    protected function _validate($request, $id = null) {
        $rules = [
            'resellers.firm_name' => 'required',
            'resellers.address' => 'required',
            'resellers.city' => 'required',
            'resellers.phone' => 'required',
            'resellers.email' => "required|email|unique:resellers,email,{$id}",
            'resellers.state' => 'required',
            'resellers.fax' => 'required',
            'resellers.mobile' => 'required|numeric',
            'resellers.type' => 'required',
            'resellers.years_corp' => 'required',
            'resellers.employees_count' => 'required',
            'resellers.capital' => 'required',
            'resellers.sales_turnover' => 'required',
            'resellers.roc_no' => 'required',
            'resellers.gst_no' => 'required',
            'resellers.pan_no' => 'required',
            'resellers.trade_date' => 'required',
            'resellers.place' => 'required',
            'contacts.*.name' => 'required',
            'contacts.*.address' => 'required',
            'contacts.*.city' => 'required',
            'contacts.*.mobile' => 'required',
            'office_details.*.name' => 'required',
            'office_details.*.contact_no' => 'required',
            'office_details.*.email' => 'required|email',
            'bank_ref.bank_name' => 'required',
            'bank_ref.contact_no' => 'required',
            'bank_ref.ifsc_code' => 'required',
            'bank_ref.address' => 'required',
            'bank_ref.phone' => 'required',
            'bank_ref.credit_limit' => 'required',
            'bank_ref.ac_no' => 'required',
            'bank_ref.type' => 'required',
            'bank_ref.collateral' => 'required',
            'trade_ref.trade_ref1.firm_name' => 'required',
            'trade_ref.trade_ref1.address' => 'required',
            'trade_ref.trade_ref1.city' => 'required',
            'trade_ref.trade_ref1.phone' => 'required',
            'trade_ref.trade_ref1.state' => 'required',
            'trade_ref.trade_ref1.fax_no' => 'required',
            'attachment.roc' => 'mimes:doc,pdf,xls',
            'attachment.gst' => 'mimes:doc,pdf,xls',
            'attachment.pan' => 'mimes:doc,pdf,xls',
            'attachment.bank_check' => 'mimes:doc,pdf,xls',
            'supportdocs.ltd.*' => 'mimes:doc,pdf,xls',
            'supportdocs.partnership.*' => 'mimes:doc,pdf,xls',
            'supportdocs.sole.*' => 'mimes:doc,pdf,xls',
        ];

        if (!$id) {
            $rules['attachment.sign'] = 'required|mimes:doc,pdf,xls';
        }

        $nice_names = [
            'resellers.firm_name.required' => 'Firm name is Required',
            'resellers.address.required' => 'Address is Required',
            'resellers.city.required' => 'City is Required',
            'resellers.phone.required' => 'Phone is Required',
            'resellers.email.required' => "Email is Required",
            'resellers.email.unique' => "This email has already been taken",
            'resellers.state.required' => 'State  is Required',
            'resellers.fax.required' => 'Fax is Required',
            'resellers.mobile.required' => 'Mobile is Required',
            'resellers.type.required' => 'Type is Required',
            'resellers.years_corp.required' => 'Years of Incorporation is Required',
            'resellers.employees_count.required' => 'No of Employees is Required',
            'resellers.capital.required' => 'Captial/Equity is Required',
            'resellers.sales_turnover.required' => 'Total Sales Turnover Last Year is Required',
            'resellers.roc_no.required' => 'ROC Reg. No is Required',
            'resellers.gst_no.required' => 'GST Reg. no is Required',
            'resellers.pan_no.required' => 'I.T.PAN No./SIN No is Required',
            'contacts.*.name.required' => 'Name is Required',
            'contacts.*.address.required' => 'Address is Required',
            'contacts.*.city.required' => 'City is Required',
            'contacts.*.mobile.required' => 'Mobile Number is Required',
            'office_details.*.name.required' => 'Name is Required',
            'office_details.*.contact_no.required' => 'Contact Number is Required',
            'office_details.*.email.required' => 'Email is Required',
            'bank_ref.bank_name.required' => 'Bank Name is Required',
            'bank_ref.contact_no.required' => 'Contact No is Required',
            'bank_ref.ifsc_code.required' => 'IFSC Code is Required',
            'bank_ref.address.required' => 'Address is Required',
            'bank_ref.phone.required' => 'Mobile Number is Required',
            'bank_ref.credit_limit.required' => 'Credit Limit is Required',
            'bank_ref.ac_no.required' => 'Account Number is Required',
            'bank_ref.type.required' => 'Type is Required',
            'bank_ref.collateral.required' => 'Collateral is Required',
            'trade_ref.trade_ref1.firm_name.required' => 'Firm Name is Required',
            'trade_ref.trade_ref1.address.required' => 'Address is Required',
            'trade_ref.trade_ref1.city.required' => 'City is Required',
            'trade_ref.trade_ref1.phone.required' => 'Mobile Number is Required',
            'trade_ref.trade_ref1.state.required' => 'State is Required',
            'trade_ref.trade_ref1.fax_no.required' => 'Fax is Required',
            'resellers.trade_date.required' => 'Date is Required',
            'resellers.place.required' => 'Place is Required',
            'attachment.sign.required' => 'File is Required',
            'attachment.roc.mimes' => 'Only pdf,xls and doc files are allowed',
            'attachment.gst.mimes' => 'Only pdf,xls and doc files are allowed',
            'attachment.pan.mimes' => 'Only pdf,xls and doc files are allowed',
            'attachment.bank_check.mimes' => 'Only pdf,xls and doc files are allowed',
            'attachment.sign.mimes' => 'Only pdf,xls and doc files are allowed',
            'supportdocs.ltd.*' => 'Only pdf,xls and doc files are allowed',
            'supportdocs.partnership.*' => 'Only pdf,xls and doc files are allowed',
            'supportdocs.sole.*' => 'Only pdf,xls and doc files are allowed',
        ];

        $this->validate($request, $rules, $nice_names);
    }

    protected function _save($request, $model) {
        $changes = [];
        $changes['reseller'] = $this->_resellersave($request->resellers, $model);
        $changes['contact'] = $model->_contactsave($request->contacts);
        $changes['office'] = $model->_officedetailsave($request->office_details);
        $changes['bank'] = $model->_bankdetailsave($request->bank_ref);
        $changes['trade'] = $model->_tradedetailsave($request->trade_ref);
        $changes['attachment'] = $model->_attachment($request->attachment);
        $changes['supportdocs'] = $model->_supportdocs($request->supportdocs);

        return $changes;
    }

    protected function _resellersave($data, $model) {
        $changes = [];
        $model->user_id = \Auth::user()->id;
        $model->fill($data);
        if ($model->exists) {
            $changes = $model->getDirty();
        }
        $model->save();

        return $changes;
    }

    public function edit($id) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Reseller', 'partner/reseller');
        $data['breadcrumbs']->addCrumb('Edit Form', '');
        $data['breadcrumbs']->setDivider('»');
        $data['Reseller'] = Reseller::find($id);
        $reseller_id = $data['Reseller']['id'];
        $data['ResellerContact'] = $data['Reseller']->reseller_contact_details->groupBy('type');
        $data['ResellerOffice'] = $data['Reseller']->reseller_office_details->groupBy('type');
        $data['ResellerBankDetail'] = $data['Reseller']->reseller_bank_details;
        $data['ResellerTrade'] = $data['Reseller']->reseller_trade_details->groupBy('type');
        $data['ResellerFiles'] = $data['Reseller']->reseller_files->groupBy('file_type');
        $this->_append_form_variables($data);
        return view('site.reseller.edit', $data);
    }

    public function update(Request $request, $id) {
        $this->_validate($request, $id);
        $model = Reseller::find($id);
        $changes = $this->_save($request, $model);

        $data = [
            'partner_name' => \Auth::user()->name,
            'resellers' => @$changes['reseller'],
            'contacts' => @$changes['contact'],
            'office_details' => @$changes['office'],
            'bank_ref' => @$changes['bank'],
            'trade_ref' => @$changes['trade'],
            'files' => @$changes['attachment'],
            'supportdocs' => @$changes['supportdocs'],
        ];

        $Toemail = Setting::fetch('contact_email');

        \Mail::send('site.reseller.email', ['data' => $data], function($message) use ($Toemail) {
            $message->from('noreply@gmail.com');
            $message->to($Toemail, 'Admin')->subject('Cloudline Reseller Account Opening Form');
        });
        return redirect('partner/reseller')->with('alert-success', 'successfully updated!');
    }

}

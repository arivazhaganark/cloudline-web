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
//        dd($request->all());
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
            'trade_ref.1.firm_name' => 'required',
            'trade_ref.1.address' => 'required',
            'trade_ref.1.city' => 'required',
            'trade_ref.1.phone' => 'required',
            'trade_ref.1.state' => 'required',
            'trade_ref.1.fax_no' => 'required',
            'attachment.roc' => 'mimes:doc,pdf,xls',
            'attachment.gst' => 'mimes:doc,pdf,xls',
            'attachment.pan' => 'mimes:doc,pdf,xls',
            'attachment.bank_check' => 'mimes:doc,pdf,xls',
            'supportdocs.ltd' => 'mimes:doc,pdf,xls',
            'supportdocs.partner' => 'mimes:doc,pdf,xls',
            'supportdocs.sole' => 'mimes:doc,pdf,xls',
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
            'trade_ref.1.firm_name.required' => 'Firm Name is Required',
            'trade_ref.1.address.required' => 'Address is Required',
            'trade_ref.1.city.required' => 'City is Required',
            'trade_ref.1.phone.required' => 'Mobile Number is Required',
            'trade_ref.1.state.required' => 'State is Required',
            'trade_ref.1.fax_no.required' => 'Fax is Required',
            'resellers.trade_date.required' => 'Date is Required',
            'resellers.place.required' => 'Place is Required',
            'attachment.sign.required' => 'File is Required',
        ];

        $this->validate($request, $rules, $nice_names);
    }

    protected function _save($request, $model) {
        $data1 = $request->resellers;

        $model->user_id = \Auth::user()->id;
        $model->fill($data1);
        $model->save();

        $contactdetails = $this->_contactsave($request, $model);
        $officedetails = $this->_officedetailsave($request, $model);
        $bankdetails = $this->_bankdetailsave($request, $model);
        $tradedetails = $this->_tradedetailsave($request, $model);
        $files = $this->_files($request, $model);
    }

    protected function _contactsave($request, $model) {
        $datas2 = $request->contacts;
        foreach ($datas2 as $key => $data2) {
            $reseller_contact = new ResellerContactDetail();
            $reseller_contact->type = $key;
            $reseller_contact->fill($data2);
            $reseller_contact->reseller_id = $model->id;
            $reseller_contact->save();
        }
    }

    protected function _officedetailsave($request, $model) {
        $datas3 = $request->office_details;
        foreach ($datas3 as $key => $data3) {
            $reseller_office_details = new ResellerOfficeDetail();
            $reseller_office_details->type = $key;
            $reseller_office_details->fill($data3);
            $reseller_office_details->reseller_id = $model->id;
            $reseller_office_details->save();
        }
    }

    protected function _bankdetailsave($request, $model) {
        $data4 = $request->bank_ref;
        $reseller_bank_details = new ResellerBankDetail();
        $reseller_bank_details->fill($data4);
        $reseller_bank_details->reseller_id = $model->id;
        $reseller_bank_details->save();
    }

    protected function _tradedetailsave($request, $model) {
        $datas5 = $request->trade_ref;
        foreach ($datas5 as $key => $data5) {
            if (!empty($data5['firm_name'])) {
                $reseller_office_details = new ResellerTradeDetail();
                $reseller_office_details->type = $key;
                $reseller_office_details->fill($data5);
                $reseller_office_details->reseller_id = $model->id;
                $reseller_office_details->save();
            }
        }
    }

    protected function _files($request, $model) {
        $files = $request->files;
        foreach ($files as $key => $file) {
            foreach ($file as $file1) {
                $destinationPath = base_path() . '/uploads';
                $pathname = $file['file_path']->getClientOriginalName();
                $pathToFile = $file['file_path']->move($destinationPath, $pathname);
                $reseller_files = new ResellerFile();
                $reseller_files->file_type = $key;
                $reseller_files->file_path = $pathToFile;
                $reseller_files->reseller_id = $model->id;
                $reseller_files->save();
            }
        }
    }

    public function edit($id) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->addCrumb('Reseller', 'partner/reseller');
        $data['breadcrumbs']->addCrumb('Edit Form', '');
        $data['breadcrumbs']->setDivider('»');
        $data['Reseller'] = Reseller::find($id);
        $reseller_id = $data['Reseller']['id'];

        $data['prop'] = ResellerContactDetail::where(['type' => 'proprietor', 'reseller_id' => $reseller_id])->first();
        $data['partner'] = ResellerContactDetail::where(['type' => 'partner', 'reseller_id' => $reseller_id])->first();
        $data['director'] = ResellerContactDetail::where(['type' => 'director', 'reseller_id' => $reseller_id])->first();

        $data['sales'] = ResellerOfficeDetail::where(['type' => 'sales', 'reseller_id' => $reseller_id])->first();
        $data['accounts'] = ResellerOfficeDetail::where(['type' => 'accounts', 'reseller_id' => $reseller_id])->first();
        $data['logistics'] = ResellerOfficeDetail::where(['type' => 'logistics', 'reseller_id' => $reseller_id])->first();
        $data['tech'] = ResellerOfficeDetail::where(['type' => 'tech', 'reseller_id' => $reseller_id])->first();
        $data['support'] = ResellerOfficeDetail::where(['type' => 'support', 'reseller_id' => $reseller_id])->first();

        $data['ResellerBankDetail'] = ResellerBankDetail::where('reseller_id', '=', $reseller_id)->first();

        $data['trade_ref1'] = ResellerTradeDetail::where(['type' => 1, 'reseller_id' => $reseller_id])->first();
        $data['trade_ref2'] = ResellerTradeDetail::where(['type' => 2, 'reseller_id' => $reseller_id])->first();

        $data['file_roc'] = ResellerFile::where(['file_type' => 'roc', 'reseller_id' => $reseller_id])->first();
        $data['file_gst'] = ResellerFile::where(['file_type' => 'gst', 'reseller_id' => $reseller_id])->first();
        $data['file_pan'] = ResellerFile::where(['file_type' => 'pan', 'reseller_id' => $reseller_id])->first();
        $data['file_bank_check'] = ResellerFile::where(['file_type' => 'bank_check', 'reseller_id' => $reseller_id])->first();
        $data['sign'] = ResellerFile::where(['file_type' => 'sign', 'reseller_id' => $reseller_id])->first();
        $this->_append_form_variables($data);
        return view('site.reseller.edit', $data);
    }

    public function update(Request $request, $id) {
        dd($request->files);
        $this->_validate($request, $id);
        $data1['Reseller'] = Reseller::find($id);
        $datas = $request->resellers;
        if ($datas) {
            $data1['Reseller']->fill($datas);
            $reseller_changes = $data1['Reseller']->getDirty();
            $data1['Reseller']->save();
        }
        $contact_datas = $request->contacts;
        if ($contact_datas) {
            foreach ($contact_datas as $key => $contact) {
                $model = ResellerContactDetail::where([['reseller_id', '=', $id], ['type', '=', $key]])->first();
                $model->fill($contact);
                $contact_changes[$key] = $model->getDirty();
                $model->save();
            }
        }

        $office_details = $request->office_details;
        if ($office_details) {
            foreach ($office_details as $key => $office_detail) {
                $model = ResellerOfficeDetail::where([['reseller_id', '=', $id], ['type', '=', $key]])->first();
                $model->fill($office_detail);
                $office_detail_changes[$key] = $model->getDirty();
                $model->save();
            }
        }

        $bank_details = $request->bank_ref;
        if ($bank_details) {
            $data4['bank_ref'] = ResellerBankDetail::where('reseller_id', '=', $id)->first();
            $data4['bank_ref']->fill($bank_details);
            $bank_ref_changes = $data4['bank_ref']->getDirty();
            $data4['bank_ref']->save();
        }

        $trade_details = $request->trade_ref;
        if ($trade_details) {
            foreach ($trade_details as $key => $trade_detail) {
                $model = ResellerTradeDetail::where([['reseller_id', '=', $id], ['type', '=', $key]])->first();
                $model->fill($trade_detail);
                $trade_changes[$key] = $model->getDirty();
                $model->save();
            }
        }

        $files = $request->files;
        if ($files) {
            foreach ($files as $key => $file) {
                $pathToFile = $this->file_upload($file);
                $reseller_files = ResellerFile::updateOrCreate(['reseller_id' => $id, 'file_type' => $key], ['file_path' => $pathToFile]);
                $changes[] = $reseller_files->getDirty();
            }
        }
        $data = [
            'partner_name' => \Auth::user()->name,
            'resellers' => $reseller_changes,
            'contacts' => $contact_changes,
            'office_details' => $office_detail_changes,
            'bank_ref' => $bank_ref_changes,
            'trade_ref' => $trade_changes,
            'files' => $files,
        ];

//        $attachments = [
//            'changes' => $changes,
//        ];


        $Toemail = Setting::fetch('contact_email');

        \Mail::send('site.reseller.email', ['data' => $data], function($message) use ($Toemail) {
            $message->from('noreply@gmail.com');
            $message->to($Toemail, 'Admin')->subject('Cloudline Reseller Account Opening Form');
//            foreach ($attachments as $attachment) {
//                $message->attach($attachment);
//            }
        });
        return redirect('partner/reseller')->with('alert-success', 'successfully updated!');
    }

    public function file_upload($file) {
        $destinationPath = base_path() . '/uploads';
        $pathname = $file['file_path']->getClientOriginalName();
        $pathToFile = $file['file_path']->move($destinationPath, $pathname);
        return $pathToFile;
    }

}

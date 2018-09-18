<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Mail\StarterFormEnquiry;
use App\Mail\VideoCallRequest;
use App\Models\Cms;
use App\Models\Setting;
use App\Models\VideoCall;
use App\Shortcodes\ProductsShortcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use function abort;
use function base_path;
use function redirect;
use function response;
use function view;

class SiteController extends Controller {

    public function homepage() {
        return view('site.welcome');
    }

    public function page($Page) {
        $pageinfo = Cms::where("slug", $Page)->first();
        if ($pageinfo) {
            $data['Page'] = $pageinfo;
            return view("site.cms-page", $data)->withShortcodes();
        } elseif (View::exists("site.$Page")) {
            return view("site.$Page");
        } else {
            abort(404);
        }
    }

    public function starter() {
        $data['values'] = ['yes' => 'Yes', 'no' => 'No'];
        return view('site.starter', $data);
    }

    public function starterstore(Request $request) {

        $validator = Validator::make($request->all(), [
                    'company_name' => 'required',
                    'started_on' => 'required',
                    'sector' => 'required',
                    'company_reg' => 'required',
                    'website' => 'required',
                    'specify_other' => 'required_if:sector,==,other',
//                    'support_docs' => 'required_if:start_date,yes && required_if:capital,yes',
                        ], [
                    'specify_other.required_if' => 'The Specify other field is required',
                    'support_docs.required_if' => 'The File field is required',
                    'support_docs.required' => 'The Support documents are required',
                    'company_reg.required' => 'The Company Registration field is required',
        ]);

        $validator->sometimes('support_docs', 'required', function($request) {
            return ($request->start_date == 'yes' && $request->capital == 'yes');
        });


        $input = $request->all();

        if ($validator->passes()) {

            $Toemail = Setting::fetch('contact_email');

            $input = $request->all();
            $input['filenames'] = [$request->company_reg->getClientOriginalName(),$request->support_docs->getClientOriginalName()];
            $input['company_reg'] = Storage::disk('public')->putFile('uploads', $request->company_reg);
            $input['support_docs'] = Storage::disk('public')->putFile('uploads', $request->support_docs);   
            $input['files'] = [$input['company_reg'],$input['support_docs']];
            if ($request->hasFile('financial_statement')) {                
                $input['financial_statement'] = Storage::disk('public')->putFile('uploads', $request->financial_statement);
                $input['files'][] = $input['financial_statement'];
                $input['filenames'][] = $request->financial_statement->getClientOriginalName();
            }
            Mail::to($Toemail)->queue(new StarterFormEnquiry($input));

            return response()->json(['success' => 'Success!'], 200);
        }

        return \Response::json(['errors' => $validator->errors()]);
    }

    public function videocall() {
        return view('layouts.partials.videocall');
    }

    public function videocallstore(Request $request) {
        $data = $request->only('name', 'email');

        $Toemail = Setting::fetch('contact_email');
        Mail::to($Toemail)->queue(new VideoCallRequest($data));

        return redirect('guideline');
    }

    public function guideline() {
        return view('site.guideline');
    }

}

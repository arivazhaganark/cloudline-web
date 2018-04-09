<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use function abort;
use function back;
use function view;

class SiteController extends Controller {

    public function homepage() {
        return view('site.welcome');
    }

    public function page($Page) {
        $pageinfo = \App\Models\Cms::where("slug", $Page)->first();
        if ($pageinfo) {
            $data['Page'] = $pageinfo;
            return view("site.cms-page", $data);
        } elseif (View::exists("site.$Page")) {
            return view("site.$Page");
        } else {
            abort(404);
        }
    }

    public function starter() {
        return view('site.starter');
    }

    public function starterstore(Request $request) {

        $validator = Validator::make($request->all(), [
                    'company_name' => 'required',
                    'started_on' => 'required',
                    'sector' => 'required',
                    'specify_other' => 'required_if:sector,==,other',
//                    'file_upload' => 'required_if:start_date,yes && required_if:capital,yes',
                        ], [
                    'specify_other.required_if' => 'The Specify other field is required',
                    'file_upload.required_if' => 'The File field is required',
        ]);

        $validator->sometimes('file_upload', 'required', function($request) {
            return ($request->start_date == 'yes' && $request->capital == 'yes');
        });


        $input = $request->all();

        if ($validator->passes()) {

            $contact = Setting::where('name', '=', 'CONTACT')->first();

            $input = $request->all();
            if ($request->file_upload) {
                $file = $request->file('file_upload');
                $destinationPath = base_path() . '/uploads';
                $pathname = $file->getClientOriginalName();
                $pathToFile = $file->move($destinationPath, $pathname);
                \Mail::send('site.email', ['input' => $input], function($message) use ($request, $contact, $pathToFile) {
                    $message->from('admin@gmail.com');
                    $message->to($contact->meta_value, 'Admin')->subject('Cloudline Web Development');
                    $message->attach($pathToFile);
                });
            }
            \Mail::send('site.email', ['input' => $input], function($message) use ($request, $contact) {
                $message->from('admin@gmail.com');
                $message->to($contact->meta_value, 'Admin')->subject('Cloudline Web Development');
            });

            return response()->json(['success' => 'Success!'], 200);
        }

        return \Response::json(['errors' => $validator->errors()]);
    }

}

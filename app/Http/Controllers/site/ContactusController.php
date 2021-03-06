<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Setting;
use App\Traits\CaptchaTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function back;
use function view;

class ContactusController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    use CaptchaTrait;

    public function index() {
        return view('site.contactus.index');
    }

    public function store(Request $request) {
        $this->_validate($request);
        $contact = Setting::fetch('contact_email');
        $model = new ContactUs();
        $this->_save($request, $model);

        $data = ['name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')];

        \Mail::send('site.contactus.email', ['data' => $data], function($message) use ($request, $contact) {
            $message->from($request->get('email'));
            $message->to($contact, 'Admin')->subject('Cloudline Web Development');
        });

        return back()->with('alert-success', 'Thanks for contacting us!');
    }

    protected function _save($request, $model) {
        $data = $request->except(['_token', 'g-recaptcha-response']);
        $data['ip_address'] = $request->ip();
        $model->fill($data);
        $model->save();
    }

    protected function _validate($request) {

        \NoCaptcha::shouldReceive('verifyResponse')
                ->once()
                ->andReturn(true);

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ];
        $custom_msg = [
            'g-recaptcha-response.required' => 'The Captcha field is required',
        ];
        $this->validate($request, $rules, $custom_msg);
    }

}

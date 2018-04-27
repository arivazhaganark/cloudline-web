<?php

namespace App\Http\Controllers\site\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use function redirect;
use Auth;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('guest:web')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function authenticated($request, $user) {
        return redirect('/');
    }
    
    public function authenticate(Request $request) {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
            'status' => [function ($attribute, $value, $fail) use($request) {
                    $user = User::whereEmail($request->email)->first();
                    if ($user) {
                        if (@$user->partner->status == 2) {
                            return $fail('Your account was declined.Contact administrator');
                        }
                        if (@$user->role != 'P') {
                            return $fail('Your account not partner.Contact administrator');
                        }
                    }
                }]
        ]);

        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            return redirect('/partner/home');
        } else {
            return back()->with('alert-danger', 'Please check your email and password');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function logout(Request $request) {
        Auth::guard('web')->logout();

        return redirect('/partner');
    }

}

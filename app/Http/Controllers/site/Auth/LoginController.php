<?php

namespace App\Http\Controllers\site\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use function redirect;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function authenticated($request, $user) {
        if ($user->role == 'A') {
            return redirect('/admin');
        } elseif ($user->role == 'P') {
            return redirect('/admin/profile');
        }
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
                    }
                }]
        ]);

        $email = $request->email;
        $password = $request->password;
        if (\Auth::attempt(['email' => $email, 'password' => $password]) && !\Auth::user()->is_admin) {
            // Authentication passed...
            return redirect()->intended('partner/home');
        } else {
            return redirect()->intended('admin');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request) {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/partner');
    }

}

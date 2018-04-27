<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Route;

class LoginController extends Controller
{
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
    public function authenticated($request, $user)
    {
        return redirect('/admin');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required'
      ]);
      
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,'role' => 'A'], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('home'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->with('danger','You are not access to admin panel.');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/admin');
    }

}

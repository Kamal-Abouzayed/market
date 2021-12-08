<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return \view('dashboard.auth.login');
    }

    public function login(Request $request)
    {
        //validate form data

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        //attempt to log admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return \redirect()->intended(\route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
}

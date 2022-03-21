<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ValidatesRequests;

    public function __construct()
    {
        $this->middleware('guest',['except' => ['logout']]);
        $this->middleware('prevent-back-history');

    }

    function login()
    {

        return view('user::auth.login');
    }

    function doLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request['email'],'password' => $request['password']],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('admin.login');
    }


}

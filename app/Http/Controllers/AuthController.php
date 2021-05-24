<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function username()
    {
    return 'username';
    }

    public function postlogin(Request $request)
    {
       if(Auth::attempt($request->only('username', 'password'))){
           return redirect('/clienthomepage');
       }
       return redirect('/loginpage');
    }

    public function logout()
    {
            Auth::logout();
            return redirect('/index');
    }
    
}

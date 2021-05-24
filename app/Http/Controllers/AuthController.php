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
           return redirect('/clientlandingpage');
       }
       return redirect('/loginpage');
    }

    public function logout()
    {
            Auth::logout();
            return redirect('/index');
    }

    public function create(Request $request)
    {
        $request = new \App\Models\User;
        $request -> username = request('username');
        $request -> email = request('email');
        $request -> password = bcrypt(request('password'));
        $request -> access = request('access');
        $request -> save(); 

        $request = new \App\Models\Client;
        $request -> username = request('username');
        $request -> name = request('name');
        $request -> email = request('email');
        $request -> address = request('address');
        $request -> phonenumber = request('notelp');
        $request -> univname = request('univname');
        $request -> save(); 
        
        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/loginpage');
    }
    
}

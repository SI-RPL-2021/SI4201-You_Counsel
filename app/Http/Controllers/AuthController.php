<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $userId = Auth::id();
        $useraccess = DB::table('users')->where('id', $userId)->pluck('access');
        $useraccess = trim($useraccess, '[]');
        $access = (int)$useraccess;
        if($access == 2){
            return redirect('/counselor_homepage');
        }elseif($access == 1){
            return redirect('/admin_homepage');
        }else{
            return redirect('/clientlandingpage');
        }
       }
         return redirect('/login');
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
        
        if($request->access == 1){
        $request = new \App\Models\Admin;
        $request -> username = request('username');
        $request -> name = request('name');
        $request -> email = request('email');
        $request -> phonenumber = request('phonenumber');
        $request -> save(); 
        }else{
        $request = new \App\Models\Admin;
        $request -> username = request('username');
        $request -> name = request('name');
        $request -> email = request('email');
        $request -> phonenumber = request('phonenumber');
        $request -> save(); 
        }
        
        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/login');
    }

    public function admincreate(Request $request)
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
        return redirect('/login');
    }
    
}

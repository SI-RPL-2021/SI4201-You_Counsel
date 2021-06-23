<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //INDEX
    public function index()
    {

    $userId = Auth::id();
    $client_userprofile = \App\Models\Client::all()->where('id', $userId);
    return view('client_userprofile', ['client_userprofile' => $client_userprofile]);
    }

    public function adminindex()
    {

    $userId = Auth::id();
    $admin_profile = \App\Models\Admin::all()->where('id', $userId);
    return view('admin_profile', ['admin_profile' => $admin_profile]);
    }

    public function updateclient(Request $request)
    {

    $userId = Auth::id();
    $request = \App\Models\Client::all()->where('id', $userId)->first();
    $request -> name = request('name');
    $request -> phonenumber = request('phonenumber');
    $request -> save(); 

    $client_userprofile = \App\Models\Client::all()->where('id', $userId);
    return view('client_userprofile', ['client_userprofile' => $client_userprofile]);
    }

    public function updateadmin(Request $request)
    {

    $userId = Auth::id();
    $request = \App\Models\Admin::all()->where('id', $userId)->first();
    $request -> name = request('name');
    $request -> phonenumber = request('phonenumber');
    $request -> save(); 

    $admin_profile = \App\Models\Admin::all()->where('id', $userId);
    return view('admin_profile', ['admin_profile' => $admin_profile]);
    }

    public function updateclientpassword(Request $request)
    {
    $password = request('password');
    $password2 = request('password2');
    
    if($password == $password2){
    $userId = Auth::id();
    $request = \App\Models\User::all()->where('id', $userId)->first();
    $request -> password = bcrypt(request('password'));
    $request -> save(); 
    }

    $client_userprofile = \App\Models\Client::all()->where('id', $userId);
    return view('client_userprofile', ['client_userprofile' => $client_userprofile]);
    }

    public function updateadminpassword(Request $request)
    {

    $password = request('password');
    $password2 = request('password2');
        
    if($password == $password2){
    $userId = Auth::id();
    $request = \App\Models\User::all()->where('id', $userId)->first();
    $request -> password = bcrypt(request('password'));
    $request -> save(); 
    }
    
    $admin_profile = \App\Models\Admin::all()->where('id', $userId);
    return view('admin_profile', ['admin_profile' => $admin_profile]);
    }

    public function adminsearchbyid($id)
    {
    $clientprofile =  \App\Models\Client::find($id);
    return view('/', ['/' => $clientprofile]);
    }

    public function adminsearchbyusername($username)
    {
    $clientprofile =  \App\Models\Client::find($username);
    return view('clientprofile', ['clientprofile' => $clientprofile]);
    }
     
}
 
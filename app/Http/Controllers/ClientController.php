<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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

    public function counselorindex()
    {

    $userId = Auth::id();
    $counselor_userprofile = \App\Models\Counselor::all()->where('id', $userId);
    return view('counselor_userprofile', ['counselor_userprofile' => $counselor_userprofile]);
    }

    public function updateclient(Request $request)
    {

    $userId = Auth::id();
    $request = \App\Models\Client::all()->where('id', $userId)->first();
    $request -> name = request('name');
    $request -> phonenumber = request('phonenumber');
    $request -> save(); 

    $client_userprofile = \App\Models\Client::all()->where('id', $userId);
    return view('client_userprofile', ['client_userprofile' => $client_userprofile])->with(['alert' => 'Account Succesfully Changed!']);
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

    public function updatecounselor(Request $request)
    {

    $userId = Auth::id();
    $request = \App\Models\Counselor::all()->where('id', $userId)->first();
    $request -> name = request('name');
    $request -> phonenumber = request('phonenumber');
    $request -> save(); 

    $counselor_userprofile = \App\Models\Counselor::all()->where('id', $userId);
    return view('counselor_userprofile', ['counselor_userprofile' => $counselor_userprofile]);
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

    public function updatecounselorpassword(Request $request)
    {

    $password = request('password');
    $password2 = request('password2');
        
    if($password == $password2){
    $userId = Auth::id();
    $request = \App\Models\User::all()->where('id', $userId)->first();
    $request -> password = bcrypt(request('password'));
    $request -> save(); 
    }
    
    $counselor_userprofile = \App\Models\Counselor::all()->where('id', $userId);
    return view('counselor_userprofile', ['counselor_userprofile' => $counselor_userprofile]);
    }

    public function updatecounselordetails(Request $request)
    {

    $spec1 = request('check1a');
    $spec2 = request('check2a');
    $spec3 = request('check3a');
    $spec4 = request('check4a');
    if(is_null($spec1)){ $spec1 = array(' ');}
    if(is_null($spec2)){ $spec2 = array(' ');}
    if(is_null($spec3)){ $spec3 = array(' ');}
    if(is_null($spec4)){ $spec4 = array(' ');}
    $specialization = array_merge($spec1, $spec2, $spec3, $spec4);
    $specialization = implode(' ', $specialization);

    $day1 = request('check1b');
    $day2 = request('check2b');
    $day3 = request('check3b');
    $day4 = request('check4b');
    $day5 = request('check5b');
    if(is_null($day1)){ $day1 = array(' ');}
    if(is_null($day2)){ $day2 = array(' ');}
    if(is_null($day3)){ $day3 = array(' ');}
    if(is_null($day4)){ $day4 = array(' ');}
    if(is_null($day5)){ $day5 = array(' ');}
    $availdays = array_merge($day1, $day2, $day3, $day4, $day5);
    $availdays = implode(' ', $availdays);

    $userId = Auth::id();
    $request = \App\Models\Counselor::all()->where('id', $userId)->first();
    $request -> specialization = $specialization;
    $request -> availdays = $availdays;
    $request -> save(); 
    
    $counselor_userprofile = \App\Models\Counselor::all()->where('id', $userId);
    return view('counselor_userprofile', ['counselor_userprofile' => $counselor_userprofile]);
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
 
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentReqController extends Controller
{
    //
    public function create(Request $request)
    {
        $request = new \App\Models\AppointmentAns;
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

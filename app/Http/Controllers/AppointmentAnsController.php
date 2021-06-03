<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentAnsController extends Controller
{
    //
    public function create(Request $request)
    {
        $userId = Auth::id();
        $request = new \App\Models\AppointmentAns;
        $request -> scheduleid = request('scheduleid');
        $request -> requesteddate = request('date');
        $request -> clientid = request('clientid');
        $request -> counselorid = $userId;
        $request -> approval = request('approval');
        $request -> message = request('message');
        $request -> save(); 

        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/counselor_homepage');
    }
}

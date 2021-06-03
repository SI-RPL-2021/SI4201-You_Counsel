<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppointmentReq;

class AppointmentReqController extends Controller
{
    //
    public function create(Request $request)
    {
        $userId = Auth::id();
        $request = new \App\Models\AppointmentReq;
        $request -> requesteddate = request('date');
        $request -> clientid = $userId;
        $request -> counselorid = request('counselorid');
        $request -> type = request('type');
        $request -> method = request('method');
        $request -> reason = request('reason');
        $request -> save(); 

        
        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/clientlandingpage');
    }
}

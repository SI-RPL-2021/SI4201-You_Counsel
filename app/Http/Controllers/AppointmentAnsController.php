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
        $request -> requesteddate = request('requesteddate');
        $request -> clientid = request('clientid');
        $request -> counselorid = $userId;
        $request -> approval = request('approval');
        $request -> message = request('message');
        $request -> save(); 

        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/counselor_homepage');
    }

    public function index()
    {

    $userId = Auth::id();
    $AppointmentList = \App\Models\Message::all()->where('clientid', $userId);
    return view('client_leavemessagehistory', ['client_leavemessagehistory' => $client_leavemessagehistory]);
    }

    public function indexclient()
    {

    $userId = Auth::id();
    $client_inbox2 = \App\Models\AppointmentAns::all()->where('clientid', $userId);
    return view('client_inbox2', ['client_inbox2' => $client_inbox2]);
    }
}

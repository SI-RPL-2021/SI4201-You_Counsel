<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentAnsController extends Controller
{
    //
    public function create(Request $request)
    {
        $userId = Auth::id();
        $counselorname = DB::table('counselor')->where('id', $userId)->pluck('name');
        $counselorname = trim($counselorname, '[{"id":}]');
     
        $request = new \App\Models\AppointmentAns;
        $request -> scheduleid = request('scheduleid');
        $request -> requesteddate = request('requesteddate');
        $request -> clientid = request('clientid');
        $request -> counselorid = $userId;
        $request -> counselorname = $counselorname;
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

    public function counselorindex()
    {

    $userId = Auth::id();
    $counselor_appointment = \App\Models\AppointmentAns::all()->where('counselorid', $userId);
    return view('counselor_appointment', ['counselor_appointment' => $counselor_appointment]);
    }

    
    public function indexclient()
    {

    $userId = Auth::id();
    $client_inbox2 = \App\Models\AppointmentAns::all()->where('clientid', $userId);
    return view('client_inbox2', ['client_inbox2' => $client_inbox2]);
    }

    public function delete($id){
        $appointmentans =  \App\Models\AppointmentAns::find($id);
        $appointmentans->delete();

        return redirect('/clientlandingpage');
    }

    public function counselordelete($id){
        
        $appointmentans =  \App\Models\AppointmentAns::find($id);
        $appointmentans->delete();

        return redirect('/counselor_homepage');
    }


}

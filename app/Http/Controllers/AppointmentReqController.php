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
        return redirect('/client_appointment_thanks');
    }

    public function index()
    {

    $userId = Auth::id();
    $counselor_appointmentlist = \App\Models\AppointmentReq::all()->where('counselorid', $userId);
    return view('counselor_appointmentlist', ['counselor_appointmentlist' => $counselor_appointmentlist]);
    }

    public function reply($id)
    {
        $counselor_appointment_reply = \App\Models\AppointmentReq::find($id);
        return view('/counselor_appointment_reply', ['counselor_appointment_reply' => $counselor_appointment_reply]);
    }

    public function delete($id){
        $appointmentreq =  \App\Models\AppointmentReq::find($id);
        $appointmentreq->delete();

        return redirect('/counselor_homepage');
    }


}

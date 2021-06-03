<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    //
    public function createmessage(Request $request)
    {
        $counsid = \App\Models\Counselor::inRandomOrder()->get('id');
        // $counsid = DB::select('SELECT id FROM counselor')->random();
        $counsid = trim($counsid, '[{"id":}]');

        $userId = Auth::id();
        $request = new \App\Models\Message;
        $request -> clientid = $userId;
        $request -> counselorid = $counsid;
        $request -> messages = request('pesanclient');
        $request -> save(); 

        return redirect('/client_leavemessage_thanks');
    }

    public function index()
    {

    $userId = Auth::id();
    $client_leavemessagehistory = \App\Models\Message::all()->where('clientid', $userId);
    return view('client_leavemessagehistory', ['client_leavemessagehistory' => $client_leavemessagehistory]);
    }

    public function getreplies()
    {

    $userId = Auth::id();
    $inbox = \App\Models\Message::all()->where('clientid', $userId);
    $appointmentreq = \App\Models\AppointmentReq::all()->where('clientid', $userId);
    return view('inbox', ['inbox' => $inbox], ['inbox' => $appointmentreq]);

    }
     
}

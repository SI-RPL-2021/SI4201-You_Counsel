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
    $inbox = \App\Models\Replies::all()->where('id', $userId);
    // $appointmentreq = \App\Models\AppointmentReq::all()->where('clientid', $userId);
    return view('inbox', ['inbox' => $inbox]);

    }

    public function getmessages()
    {

    $userId = Auth::id();
    $counselor_message = \App\Models\Message::all()->where('counselorid', $userId);
    // $appointmentreq = \App\Models\AppointmentReq::all()->where('clientid', $userId);
    return view('counselor_message', ['counselor_message' => $counselor_message]);

    }

    public function reply($id)
    {
        $counselor_message_reply = \App\Models\Message::find($id);
        return view('/counselor_message_reply', ['counselor_message_reply' => $counselor_message_reply]);
    }
     
    public function sendreply(Request $request)
    {
        $userId = Auth::id();
        $request = new \App\Models\Replies;
        $request -> clientid = request('clientid');
        $request -> messageid = request('messageid');
        $request -> counselorid = $userId;
        $request -> messages = request('replies');
        $request -> save(); 

        
        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/counselor_homepage');
    }

    public function delete($id){
        $messages =  \App\Models\Message::find($id);
        $messages->delete();

        return redirect('/counselor_homepage');
    }

    public function repliesdelete($id){
        $replies =  \App\Models\Replies::find($id);
        $replies->delete();

        return redirect('/clientlandingpage');
    }

    public function clientdelete($id){
        $replies =  \App\Models\Message::find($id);
        $replies->delete();

        return redirect('/clientlandingpage');
    }
}

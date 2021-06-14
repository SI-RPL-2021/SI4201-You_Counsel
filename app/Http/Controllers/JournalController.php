<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    //
    public function createjournal(Request $request)
    {
        $userId = Auth::id();
        $request = new \App\Models\Journal;
        $request -> clientid = $userId;
        $request -> mood = request('mood');
        $request -> message = request('message');
        $request -> save(); 

        return redirect('/client_myjournal_thanks');
    }

    public function journalindex()
    {
        $userId = Auth::id();
        $clientjournal = \App\Models\Journal::all()->where('clientid', $userId);
        return view('client_journalhistory', ['clientjournal' => $clientjournal]);
    }  
    
    public function findjournal($id)
    {
        $clientjournal = \App\Models\Journal::all()->where('clientid', $id);
        return view('/', ['/' => $clientjournal]);
    }   
}

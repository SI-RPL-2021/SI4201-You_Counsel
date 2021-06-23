<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //
    public function index()
    {

    $userId = Auth::id();
    $client_userprofile = \App\Models\Client::all()->where('id', $userId);
    return view('client_userprofile', ['client_userprofile' => $client_userprofile]);
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
 
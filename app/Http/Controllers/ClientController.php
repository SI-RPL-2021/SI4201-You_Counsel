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
    $clientprofile = \App\Models\Client::all()->where('id', $userId);
    return view('clientprofile', ['clientprofile' => $clientprofile]);
    }
     
}
 
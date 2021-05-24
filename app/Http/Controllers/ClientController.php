<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
    $clientprofile = \App\Models\Client::all()->where('id', 123);
    return view('userprofile', ['clientprofile' => $clientprofile]);
    }   
}

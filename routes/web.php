<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::get('/client_myjournal', function () {
    return view('client_myjournal');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login1');
});

Route::get('/client_journalhistory', function () {
    return view('client_journalhistory');
});

Route::get('/client_leavemessage_thanks', function () {
    return view('client_leavemessage_thanks');
});

Route::get('/client_leavemessage', function () {
    return view('client_leavemessage');
});

Route::get('/client_myjournal_happy', function () {
    return view('client_myjournal_happy');
});

Route::get('/client_myjournal_sad', function () {
    return view('client_myjournal_sad');
});

Route::get('/client_myjournal_flat', function () {
    return view('client_myjournal_flat');
});

Route::get('/loginpage', function () {
    return view('login1');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/checklogin', function () {
    return view('checklogin');
});

Route::get('/clienthomepage', function () {
    return view('clientlandingpage');
});

Route::get('/penjadwalan', function () {
    return view('penjadwalan');
});

Route::get('/landing', function () {
    return view('dashboard');
});

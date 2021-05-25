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
    return view('index');
});

//REGISTER LOGIN
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login1');
});

Route::get('/checklogin', function () {
    return view('checklogin');
});

Route::get('/clientlandingpage', function () {
    return view('clientlandingpage');
});

Route::get('/client_userprofile', function () {
    return view('client_userprofile');
});

//JOURNAL
Route::get('/client_myjournal', function () {
    return view('client_myjournal');
});

Route::get('/client_journalhistory', function () {
    return view('client_journalhistory');
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

//LEAVE MESSAGE
Route::get('/client_leavemessage_thanks', function () {
    return view('client_leavemessage_thanks');
});

Route::get('/client_leavemessage', function () {
    return view('client_leavemessage');
});

Route::get('/client_leavemessagehistory', function () {
    return view('client_leavemessagehistory');
});

//KONSELOR
Route::get('/penjadwalan', function () {
    return view('penjadwalan');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/counselor_message', function () {
    return view('counselor_message');
});

Route::get('/counselor_journal_checker', function () {
    return view('counselor_journal_checker');
});

Route::get('/counselor_message_reply', function () {
    return view('counselor_message_reply');
});

Route::get('/counselor_journal_checker2', function () {
    return view('counselor_journal_checker2');
});


Route::get('/profile', 'App\Http\Controllers\ClientController@index');
Route::get('/journalindex', 'App\Http\Controllers\JournalController@journalindex');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::post('/create', 'App\Http\Controllers\AuthController@create');
Route::post('/postjournal', 'App\Http\Controllers\JournalController@createjournal');
    
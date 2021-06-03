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
Route::get('/client_myjournal_thanks', function () {
    return view('client_myjournal_thanks');
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

//INBOX
Route::get('/inbox', function () {
    return view('inbox');
});

Route::get('/inboxmessage', function () {
    return view('inboxmessage');
});

//KONSELOR
Route::get('/penjadwalan', function () {
    return view('penjadwalan');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/counselor_homepage', function () {
    return view('counselor_homepage');
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

Route::get('/counselor_appointment', function () {
    return view('counselor_appointment');
});

Route::get('/counselor_appointment_reply', function () {
    return view('counselor_appointment_reply');
});

Route::get('/counselor_userprofile', function () {
    return view('counselor_userprofile');
});

//SCHEDULE APPOINTMENT
Route::get('/client_scheduleappointment', function () {
    return view('client_scheduleappointment');
});

Route::get('/tes', function () {
    return view('tes');
});
Route::post('/appointmentans', 'App\Http\Controllers\AppointmentAnsController@create');

Route::get('/client_appointment_thanks', function () {
    return view('client_appointment_thanks');
});

//USER AUTH
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/logout', '\App\Http\Controllers\AuthController@logout');
Route::get('/profile', 'App\Http\Controllers\ClientController@index');
Route::post('/create', 'App\Http\Controllers\AuthController@create');

//JOURNAL
Route::get('/journalindex', 'App\Http\Controllers\JournalController@journalindex');
Route::post('/postjournal', 'App\Http\Controllers\JournalController@createjournal');

//SEND MESSAGE
Route::post('/leavemessage', 'App\Http\Controllers\MessageController@createmessage');
Route::get('/messagehistory', 'App\Http\Controllers\MessageController@index');
Route::get('/clientinbox', 'App\Http\Controllers\MessageController@getreplies');
Route::get('/counselormessages', 'App\Http\Controllers\MessageController@getmessages');

    
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
    return view('welcome');
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

Route::get('/client_myjournal_happy', function () {
    return view('client_myjournal_happy');
});

Route::get('/client_myjournal_sad', function () {
    return view('client_myjournal_sad');
});

Route::get('/client_myjournal_flat', function () {
    return view('client_myjournal_flat');
});

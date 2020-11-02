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
    return view('home');
});

Route::get('/lightbringer', function () {
    return view('lightbringer');
});

Route::post('/lightbringer', function () {
    return view('lightbringer');
});


Route::get('/heavylifter', function () {
    return view('heavylifter-basic');
});

Route::post('/heavylifter', function () {
    return view('heavylifter-basic');
});


Route::get('/heavy-custom', function () {
    return view('heavylifter-form');
});

Route::post('/heavy-custom', function () {
    return view('heavylifter-form');
});
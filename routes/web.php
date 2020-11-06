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

//bad; but it is working. 
Route::get('/', function () {
    return view('home');
});

//get:route name ; function returns VIEW; 
Route::get('/lightbringer', function () {
    return view('lightbringer');
});
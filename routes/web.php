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

// main route
Route::get('/',  'App\Http\Controllers\Actions@home');

//new and only real way to make routes in laravel 8.0
Route::get('/info', 'App\Http\Controllers\Actions@info');

//new help route
Route::get('/help', 'App\Http\Controllers\Actions@help');

//get:route name ; function returns VIEW; 
Route::get('/lightbringer',
 'App\Http\Controllers\Actions@create');

Route::post('/lightbringer',
 'App\Http\Controllers\Actions@createAnswers');

Route::get('/heavylifter',
 'App\Http\Controllers\Heavylifters@show_basic');

Route::post('/heavylifter',
 'App\Http\Controllers\Heavylifters@show_basic');

 Route::get('/form',
 'App\Http\Controllers\Heavylifters@create');

//this is what is coming back after form submits;
Route::post('/results',
 'App\Http\Controllers\Heavylifters@createNew');

 Route::get('/results',
 'App\Http\Controllers\Heavylifters@createNew');

Route::get('/all',
'App\Http\Controllers\Heavylifters@index');


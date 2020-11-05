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

Route::get('/', "Heavylifters@show");

//getting suggetions for lightbringer
Route::get('/lightbringer', "lightbringer@show");

//returning
Route::post('/lightbringer', "lightbringer@show");

Route::get('/heavylifter', "heavylifter@show_basic");
Route::post('/heavylifter', "heavylifter@show_basic");

Route::get('/heavylifter', "heavylifter-form@create");//initial form view
Route::post('/heavylifter', "heavylifter-form@createPost");//submission


Route::get('/customised-heavylifter', "heavylifter-form@index");
// Route::put('/customised-heavylifter', function () {
//     return redirect('form-results');
// });
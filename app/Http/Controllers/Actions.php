<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actions extends Controller
{

    public function home(){
        return view('home');
    }

    public function info(){
        return view('info');
    }

    public function lightbringer(){
        return view('lightbringer');
    }


}

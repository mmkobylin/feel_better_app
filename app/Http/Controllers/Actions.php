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

    public function help(){
        return view('help-links');
    }

    public function lightbringer(){
        return view('lightbringer');
    }

    public function randomAction() { 
    
        return Action::all()->random(1);
    }
}

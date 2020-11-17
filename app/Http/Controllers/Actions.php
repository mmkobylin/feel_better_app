<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Action; 


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

    public function create()
    {
        return view('lightbringer');
    }

    public function createAnswers(Request $request){
        $data = $request->all();
        $article = Action::create($data);
        return view('lightbringer');
    }
    

    public function randomAction() { 
    
        return Action::all()->random(1);
    }

  
}

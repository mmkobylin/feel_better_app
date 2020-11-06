<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Heavylifter; 

//set up methods via controller
class Heavylifters extends Controller
{
    //showing main page

    public function index()
    {
        return Heavylifter::all();           
    }

    public function show_basic() {
        return view('heavylifter-basic');
    }

    public function create()
    {
        return view('form');
    }

    public function createNew(Request $request)
    {
       $heavylifter = new Heavylifter;
       $heavylifter->idea1 = $request->idea1;
       $heavylifter->idea2 = $request->idea2;
       $heavylifter->idea3 = $request->idea3;
       $heavylifter->idea4 = $request->idea4;
       $heavylifter->idea5 = $request->idea5;
       $heavylifter->idea6 = $request->idea6;
        $heavylifter->save();

       echo $request->idea1;
       echo $request->idea2;
       echo $request->idea3;

       echo $request->idea4;
       echo $request->idea5;
       echo $request->idea6;
    }

    public function results(){
        return view('results');
    }

    
}

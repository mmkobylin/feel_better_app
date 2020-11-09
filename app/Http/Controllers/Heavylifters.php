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

        $allActions = [];

        //declare variables that I get from GET method
       $action1= $request->idea1;
       $action2= $request->idea2;
       $action3= $request->idea3;
       $action4= $request->idea4; 
       $action5= $request->idea5;
       $action6= $request->idea6;
   
       //this is where I collect the variables
       
       if (empty($action1) !== true ) {
           collect(array_push($allActions, $action1));
       } 
       
       if (empty($action2) !== true ) {
           collect(array_push($allActions, $action2));
       } 
       
       if (empty($action3) !== true ) {
           collect(array_push($allActions, $action3));
       } 
       
       if (empty($action4) !== true ) {
           collect(array_push($allActions, $action4));
       } 
       
       if (empty($action5) !== true ) {
           collect(array_push($allActions, $action5));
       } 
       
       if (empty($action6) !== true ) {
           collect(array_push($allActions, $action6));
       } 
    //    return $allActions;
        return $allActions;
    }

    public function answers(Request $request)
    {

        // return $allActions;
        view('info');
    }
    
}

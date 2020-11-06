<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Heavylifter; 

//set up methods via controller
class Heavylifters extends Controller
{

    public function show() {
        return view('home')
    }

    
    public function info() {
        return view('info')
    }

    public function index()
    {
        return Heavylifter::all();           
    }

    public function show_basic() {
        return view('heavylifter-basic')
    }

    public function create(){
        return view("form");
    }

    public function createPost($request)
    {
        $data = $request->all();
        $heavylifter = Heavylifter::create($data);
    }
}

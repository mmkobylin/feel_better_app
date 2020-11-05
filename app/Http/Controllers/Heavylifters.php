<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Heavylifter; 


class Heavylifters extends Controller
{
    //

    public function index()
    {
        return Heavylifter::all();
            
    }

    public function show($heavylifter)
    {
        return view("heavylifter", [
        "heavylifter" => $heavylifter
        ]);
    }
    public function create(){
        return view("form");
    }

    public function createPost($request)
    {
        $data = $request->all();
        $heavylifter = Heavylifter::create($data);

        return redirect("/");
    }
}

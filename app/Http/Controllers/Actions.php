<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actions extends Controller
{
    public function index()
    {
        return view ("home", [
            "actions" => Action::all(),
        ]);
            
    }
}

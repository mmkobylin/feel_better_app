<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Action;

class Action extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "action",
        "point",
    ];

    public static function randomiser() { 
    
        return Action::all()->random(3);
    }

    public static function sum() { 
        dd($request->data);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "action",
        "point",
    ];

    public function index()
    {
        return Action::all();
    }

    public function randomiser()
    {
        $nameOfAction = Action::all()->random(1)->pluck('action')->toArray()[0];
        return $nameOfAction;
    }
}

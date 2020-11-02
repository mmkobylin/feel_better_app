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
        $action1 = Action::all()->random(1)->pluck('action')->toArray()[0];
        $action2 = Action::all()->random(1)->pluck('action')->toArray()[0];
        $action3 = Action::all()->random(1)->pluck('action')->toArray()[0];

        if ( $action1 === $action2) {
            $action2 = Action::all()->random(1)->pluck('action')->toArray()[0];
        } elseif ($action1 === $action3) 
        {
            $action3 = Action::all()->random(1)->pluck('action')->toArray()[0];
        }

        $arrayOfActions = [$action1, $action2, $action3];

        echo implode($arrayOfActions);

    }
}

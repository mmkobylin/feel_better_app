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

    // function to pick 3 random actions 
    public function randomiser()
    {   
        //picking 3 actions
        $action1 = Action::all()->random(1)->pluck('action')->toArray()[0];
        $action2 = Action::all()->random(1)->pluck('action')->toArray()[0];
        $action3 = Action::all()->random(1)->pluck('action')->toArray()[0];

        //making sure each action is different 
        if ($action1 === $action2) {
            $action2 = Action::all()->random(1)->pluck('action')->toArray()[0];
        } elseif ($action1 === $action3 || $action2 === $action3) {
            $action3 = Action::all()->random(1)->pluck('action')->toArray()[0];
        }
        
        //collecting each action in an array, so one can access each value in the array
        $uniqueCollection = array($action1, $action2, $action3);
        return $uniqueCollection;

    }


}

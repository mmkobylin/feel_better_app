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

    public function randomiser2() { 
        do {
            //need an empty array: 
            $collectActions = [];
            //create variables: 
            $action1 = Action::all()->random(1)->pluck('action')->toArray()[0];
            $action2 = Action::all()->random(1)->pluck('action')->toArray()[0];
            $action3 = Action::all()->random(1)->pluck('action')->toArray()[0]; 
            //push variables into the collection: 
            $collectActions = array($action1, $action2, $action3);
            //check how many unique items in the array
            $x = (count(array_unique($collectActions)));
            //if it is smaller than 3, keep running the function 
        } while ($x < 3);
        return $collectActions;
    }


}

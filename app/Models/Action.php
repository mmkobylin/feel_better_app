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

    public function randomiser() { 
    
            $collectActions = (Action::all()->random(3));

        return $collectActions;
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heavylifter extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "idea1",
        "idea2",
        "idea3",
        "idea4",
        "idea5",
        "idea6",
    ];

}

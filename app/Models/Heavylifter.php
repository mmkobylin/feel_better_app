<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heavylifter extends Model
{
    use HasFactory;

    protected $fillable = [
        'idea1',
        'idea2',
        'idea3',
        'idea4',
        'idea5',
        'idea6',
    ];

    public function index()
    {
        return Heavylifter::all();
    }
}

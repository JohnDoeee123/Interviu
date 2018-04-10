<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interviu extends Model
{
    public $table = "interviu";
    protected $fillable = [
        'random_matrix',
        'reordered_matrix'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suajecost extends Model
{
    protected $table = "cat_suaje_precio";

    protected $fillable = [
        'precio','merma_suaje'
    ];
}

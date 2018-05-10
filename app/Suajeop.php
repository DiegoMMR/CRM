<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suajeop extends Model
{
    protected $table = "cat_op_suaje";

    protected $fillable = [
        'op_suaje','unidad'
    ];
}

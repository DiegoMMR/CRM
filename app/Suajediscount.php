<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suajediscount extends Model
{
    protected $table = "cat_suaje_descuentos";

    protected $fillable = [
        'cant_min','cant_max','costo_millar'
    ];
}

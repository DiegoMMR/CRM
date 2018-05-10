<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inkcost extends Model
{
    protected $table = "cat_tinta_precio";

    protected $fillable = [
        'cantidad_hojas','tinta_precio'
    ];
}

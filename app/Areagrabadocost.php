<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areagrabadocost extends Model
{
        protected $table = "costo_area_grabado";

    protected $fillable = [
        'area_min','area_max','costo_area'
    ];
}

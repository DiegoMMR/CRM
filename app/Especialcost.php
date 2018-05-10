<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialcost extends Model
{
       protected $table = "costos_especiales";

    protected $fillable = [
        'descripcion','valor'
    ];
}

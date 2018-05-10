<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armedpercentage extends Model
{
    protected $table = "montado_porcentaje";

    protected $fillable = [
        'costo_porcentaje'
    ];
}

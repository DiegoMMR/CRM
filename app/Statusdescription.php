<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusdescription extends Model
{
    protected $table = "descripcion_estatus";

    protected $fillable = [
        'descripcion'
    ];
}

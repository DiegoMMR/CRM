<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "registro_personal";

    protected $fillable = [
        'nombrep','direccionp','puesto','tel_casa','tel_cel'
    ];
}

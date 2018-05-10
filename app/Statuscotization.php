<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuscotization extends Model
{
    protected $table = "estatus_cotizaciones";

    protected $fillable = [
        'ajuste'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plecafoliocost extends Model
{
    protected $table = "costo_folio_pleca";

    protected $fillable = [
        'Cant_1','Cant_2','Folio_1','Folio_2','pleca'
    ];
}

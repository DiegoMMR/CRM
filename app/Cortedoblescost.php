<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cortedoblescost extends Model
{
    protected $table = "cat_corte_dobles_precio";

    protected $fillable = [
        'corte_costo','dobles_costo','cantidad_min','cantidad_max','cobro_minimo'
    ];
}

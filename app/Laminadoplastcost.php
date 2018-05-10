<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laminadoplastcost extends Model
{
    protected $table = "cat_lam_plast_precio";

    protected $fillable = [
        'descrip_lamp','costo_lamp','merma_11_22','minimo_lamp'
    ];
}

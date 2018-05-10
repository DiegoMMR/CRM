<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grabadodiscount extends Model
{
       protected $table = "grabado_descuentos";

    protected $fillable = [
        'min_desc','max_desc','costo_desc'
    ];
}

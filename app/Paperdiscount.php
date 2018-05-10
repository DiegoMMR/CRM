<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paperdiscount extends Model
{
    protected $table = "cat_descuentos_papel";

    protected $fillable = [
        'minimo','maximo','porcent'
    ];
}

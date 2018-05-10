<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricepaper extends Model
{
    protected $table = "precio_papel";

    protected $fillable = [
        'base_pa','altura_pa','m_base','m_altura','precio','cortes'
    ];
}

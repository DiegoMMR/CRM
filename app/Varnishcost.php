<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varnishcost extends Model
{
    protected $table = "cat_barniz_precio";

    protected $fillable = [
        'desc_barniz','costo_barniz','costo_minimo_bar','merma_barniz'
    ];
}

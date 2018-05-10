<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laminate extends Model
{
    protected $table = "cat_laminado";

    protected $fillable = [
        'laminado','unidad'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finished extends Model
{
    protected $table = "cat_acabado";

    protected $fillable = [
        'acabado','unidad'
    ];
}

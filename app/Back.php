<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Back extends Model
{
    protected $table = "cat_vueltas";

    protected $fillable = [
        'vueltas'
    ];
}

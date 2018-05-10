<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = "cat_trabajos";

    protected $fillable = [
        'trabajo'
    ];
}

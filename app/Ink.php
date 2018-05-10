<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ink extends Model
{
    protected $table = "cat_tintas";

    protected $fillable = [
        'tinta'
    ];
}

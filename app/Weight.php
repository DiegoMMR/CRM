<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $table = "cat_pap_gramaje";

    protected $fillable = [
        'gramaje'
    ];
}

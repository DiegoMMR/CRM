<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varnishextra extends Model
{
    protected $table = "cat_barniz_extra";

    protected $fillable = [
        'cantidad','barniz_extra'
    ];
}

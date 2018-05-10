<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extcotization extends Model
{
    protected $table = "cotizacion_extra";

    protected $fillable = [
        'num_caras_cd','base_grabado','altura_grabado','desc_acab_esp','cost_acab_esp'
    ];
}

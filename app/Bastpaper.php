<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bastpaper extends Model
{
    protected $table = "mejor_papel";

    protected $fillable = ['trab_hoja','desp_hoja','tipo_vuelta','el_mejor','t_columna','t_renglon','base_impresion','altura_impresion','cortes'];
}

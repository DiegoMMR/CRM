<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clientes";

    protected $fillable = [
        'nombrecomercial','razonsocial','direccion','rfc','telefono','movil','correo','nombrecontacto'
    ];

    public function cotizationes(){
    	return $this->hasMany('App\Cotization');
    }
}

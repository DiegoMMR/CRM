<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotization extends Model
{
	protected $table = "cotizaciones";
    
    protected $fillable = [
		  'id_personal',
		  'id_cliente',
		  'fecha',
		  'descripcionp',
		  'trabajo',
		  'base_ex',
		  'altura_ex',
		  'base_fin',
		  'altura_fin',
		  'g_cant',
		  'cant1',
		  'cant2',
		  'cant3',
		  'cant4',
		  'cant5',
		  'cant6',
		  'cant7',
		  'cant8',
		  'cant9',
		  'cant10',
		  'cant11',
		  'cant12',
		  'cant13',
		  'cant14',
		  'cant15',
		  'g_pyg',
		  'pa1',
		  'gr1',
		  'pa2',
		  'gr2',
		  'pa3',
		  'gr3',
		  'pa4',
		  'gr4',
		  'g_tin',
		  'fr1',
		  'vu1',
		  'fr2',
		  'vu2',
		  'fr3',
		  'vu3',
		  'fr4',
		  'vu4',
		  'g_bar',
		  'conv_bar1',
		  'conv_bar2',
		  'conv_bar3',
		  'conv_bar4',
		  'g_lamp',
		  'conv_lamp1',
		  'conv_lamp2',
		  'conv_lamp3',
		  'conv_lamp4',
		  'conv_acab',
		  'g_suaje',
		  'suaje_opc',
		  'suaje_tam'
   			];

   	public function cliente(){
    	return $this->belongsTo('App\Client');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

}

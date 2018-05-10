<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatuscotizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_cotizaciones', function (Blueprint $table) {
            $table->increments('id_cotizacion');
            
            $table->integer('id_estatus')->unsigned();
            $table->string('ajuste',50);
            $table->foreign('id_estatus')->references('id_estatus')->on('descripcion_estatus'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estatus_cotizaciones');
    }
}

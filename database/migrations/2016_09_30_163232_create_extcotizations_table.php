<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtcotizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion_extra', function (Blueprint $table) {
            $table->increments('id_cot_ext');

            $table->integer('id_cotizacion')->unsigned();
              $table->integer('num_caras_cd');
              $table->float('base_grabado');
              $table->float('altura_grabado');
              $table->string('desc_acab_esp',101);
              $table->float('cost_acab_esp');
            $table->foreign('id_cotizacion')->references('id_cotizacion')->on('cotizaciones');

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
        Schema::drop('cotizacion_extra');
    }
}

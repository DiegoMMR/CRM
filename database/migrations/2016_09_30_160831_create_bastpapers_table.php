<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBastpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mejor_papel', function (Blueprint $table) {
            $table->increments('id_mejor_papel');

            $table->integer('id_papel_precio')->unsigned();
              $table->string('trab_hoja',30);
              $table->string('desp_hoja',30);
              $table->string('tipo_vuelta',40);
              $table->integer('el_mejor');
              $table->integer('t_columna');
              $table->integer('t_renglon');
              $table->float('base_impresion');
              $table->float('altura_impresion');
              $table->integer('cortes');
            $table->foreign('id_papel_precio')->references('id_papel_precio')->on('precio_papel');

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
        Schema::drop('mejor_papel');
    }
}

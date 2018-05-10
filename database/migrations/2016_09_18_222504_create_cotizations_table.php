<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->increments('id_cotizacion');
            $table->integer('id_personal')->unsigned();
            $table->integer('id_cliente')->unsigned();

              $table->string('descripcionp',2000);
              $table->integer('trabajo');
              $table->float('base_ex');
              $table->float('altura_ex');
              $table->float('base_fin');
              $table->float('altura_fin');
              $table->integer('g_cant');
              $table->string('cant1',15);
              $table->string('cant2',15);
              $table->string('cant3',15);
              $table->string('cant4',15);
              $table->string('cant5',15);
              $table->string('cant6',15);
              $table->string('cant7',15);
              $table->string('cant8',15);
              $table->string('cant9',15);
              $table->string('cant10',15);
              $table->string('cant11',15);
              $table->string('cant12',15);
              $table->string('cant13',15);
              $table->string('cant14',15);
              $table->string('cant15',15);
              $table->integer('g_pyg');
              $table->integer('pa1');
              $table->integer('gr1');
              $table->integer('pa2');
              $table->integer('gr2');
              $table->integer('pa3');
              $table->integer('gr3');
              $table->integer('pa4');
              $table->integer('gr4');
              $table->integer('g_tin');
              $table->integer('fr1');
              $table->integer('vu1');
              $table->integer('fr2');
              $table->integer('vu2');
              $table->integer('fr3');
              $table->integer('vu3');
              $table->integer('fr4');
              $table->integer('vu4');
              $table->integer('g_bar');
              $table->string('conv_bar1',500);
              $table->string('conv_bar2',500);
              $table->string('conv_bar3',500);
              $table->string('conv_bar4',500);
              $table->integer('g_lamp');
              $table->string('conv_lamp1',500);
              $table->string('conv_lamp2',500);
              $table->string('conv_lamp3',500);
              $table->string('conv_lamp4',500);
              $table->string('conv_acab',500);
              $table->string('g_suaje',20);
              $table->integer('suaje_opc');
              $table->integer('suaje_tam');

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_personal')->references('id')->on('users');

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
        Schema::drop('cotizaciones');
    }
}

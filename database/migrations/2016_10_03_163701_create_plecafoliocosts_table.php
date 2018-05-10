<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlecafoliocostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costo_folio_pleca', function (Blueprint $table) {
            $table->increments('id_costo_folio_pleca');
            
              $table->integer('Cant_1');
              $table->integer('Cant_2');
              $table->integer('Folio_1');
              $table->integer('Folio_2');
              $table->integer('pleca');

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
        Schema::drop('costo_folio_pleca');
    }
}

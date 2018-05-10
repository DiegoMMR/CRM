<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreagrabadocostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costo_area_grabado', function (Blueprint $table) {
            $table->increments('id_costo_area_grabado');
             
              $table->float('area_min');
              $table->float('area_max');
              $table->float('costo_area');

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
        Schema::drop('costo_area_grabado');
    }
}

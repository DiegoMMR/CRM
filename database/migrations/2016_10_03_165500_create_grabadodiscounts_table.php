<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrabadodiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grabado_descuentos', function (Blueprint $table) {
            $table->increments('id_grabado_descuentos');
              $table->integer('min_desc');
              $table->integer('max_desc');
              $table->float('costo_desc');
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
        Schema::drop('grabado_descuentos');
    }
}

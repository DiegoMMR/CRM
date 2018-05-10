<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperdiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_descuentos_papel', function (Blueprint $table) {
            $table->increments('id_desc_papel');
              $table->integer('minimo');
              $table->integer('maximo');
              $table->integer('porcent');
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
        Schema::drop('cat_descuentos_papel');
    }
}

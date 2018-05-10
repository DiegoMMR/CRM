<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisml1022DecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_misml_10_22', function (Blueprint $table) {
            $table->increments('id_10_22');
              $table->integer('pliegos_10_22');
              $table->integer('merma_10_22');
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
        Schema::drop('cat_mer_misml_10_22');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMl11226tDecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_dl_1122_6t', function (Blueprint $table) {
            $table->increments('id_1122_6t');
              $table->integer('pliegos_11_22');
              $table->integer('merma_11_22');
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
        Schema::drop('cat_mer_dl_1122_6t');
    }
}

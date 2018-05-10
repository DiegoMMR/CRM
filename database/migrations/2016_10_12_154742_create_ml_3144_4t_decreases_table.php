<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMl31444tDecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_dl_3144_4t', function (Blueprint $table) {
            $table->increments('id_3144_4t');
              $table->integer('pliegos_31_44');
              $table->integer('merma_31_44');
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
        Schema::drop('cat_mer_dl_3144_4t');
    }
}

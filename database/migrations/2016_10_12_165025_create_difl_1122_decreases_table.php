<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDifl1122DecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_difl_11_22', function (Blueprint $table) {
            $table->increments('id_11_22');
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
        Schema::drop('cat_mer_difl_11_22');
    }
}

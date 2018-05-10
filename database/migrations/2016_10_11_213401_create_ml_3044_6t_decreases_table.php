<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMl30446tDecreasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_mer_ml_3044_6t', function (Blueprint $table) {
            $table->increments('id_3044_6t');
              $table->integer('pliegos_30_44');
              $table->integer('merma_30_44');
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
        Schema::drop('cat_mer_ml_3044_6t');
    }
}

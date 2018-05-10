<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInkcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_tinta_precio', function (Blueprint $table) {
            $table->increments('id_tinta_precio');
            $table->integer('id_cat_tintas')->unsigned();
              $table->integer('cantidad_hojas');
              $table->integer('tinta_precio');
            $table->foreign('id_cat_tintas')->references('id_cat_tintas')->on('cat_tintas');  
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
        Schema::drop('cat_tinta_precio');
    }
}

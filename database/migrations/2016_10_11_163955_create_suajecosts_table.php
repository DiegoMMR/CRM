<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuajecostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_suaje_precio', function (Blueprint $table) {
            $table->increments('id_suaje_precio');
            $table->integer('id_op_suaje')->unsigned();
            $table->integer('id_tam_suaje')->unsigned();
              $table->integer('precio');
              $table->integer('merma_suaje');
            $table->foreign('id_op_suaje')->references('id_op_suaje')->on('cat_op_suaje');
            $table->foreign('id_tam_suaje')->references('id_tam_suaje')->on('cat_suaje_tam'); 
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
        Schema::drop('cat_suaje_precio');
    }
}

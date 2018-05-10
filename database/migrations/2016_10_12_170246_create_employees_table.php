<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_personal', function (Blueprint $table) {
            $table->increments('id_personal');
            $table->integer('id')->unsigned();
              $table->string('nombrep',200);
              $table->string('direccionp',500);
              $table->string('puesto',200);
              $table->integer('tel_casa');
              $table->integer('tel_cel');
            $table->foreign('id')->references('id')->on('users');
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
        Schema::drop('registro_personal');
    }
}

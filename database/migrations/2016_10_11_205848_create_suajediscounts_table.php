<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuajediscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_suaje_descuentos', function (Blueprint $table) {
            $table->increments('id_suaje_desc');
              $table->float('cant_min');
              $table->float('cant_max');
              $table->float('costo_millar');
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
        Schema::drop('cat_suaje_descuentos');
    }
}

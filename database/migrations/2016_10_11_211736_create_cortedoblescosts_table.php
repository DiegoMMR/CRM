<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCortedoblescostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_corte_dobles_precio', function (Blueprint $table) {
            $table->increments('id_corte_dobles_precio');
              $table->float('corte_costo');
              $table->float('dobles_costo');
              $table->float('cantidad_min');
              $table->float('cantidad_max');
              $table->float('cobro_minimo');
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
        Schema::drop('cat_corte_dobles_precio');
    }
}

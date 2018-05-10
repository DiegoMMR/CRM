<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaminadoplastcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_lam_plast_precio', function (Blueprint $table) {
            $table->increments('cat_lam_plast_precio');
              $table->string('descrip_lamp',100);
              $table->float('costo_lamp');
              $table->float('merma_lamp');
              $table->float('minimo_lamp');
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
        Schema::drop('cat_lam_plast_precio');
    }
}

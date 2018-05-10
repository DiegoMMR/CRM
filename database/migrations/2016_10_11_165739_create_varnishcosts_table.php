<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVarnishcostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_barniz_precio', function (Blueprint $table) {
            $table->increments('id_barniz_precio');
              $table->string('desc_barniz',50);
              $table->float('costo_barniz');
              $table->float('costo_minimo_bar');
              $table->float('merma_barniz');
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
        Schema::drop('cat_barniz_precio');
    }
}

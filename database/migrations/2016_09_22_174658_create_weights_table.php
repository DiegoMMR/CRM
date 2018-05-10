<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_pap_gramaje', function (Blueprint $table) {
            $table->increments('id_pap_gramaje');
            $table->integer('id_papel')->unsigned();
            $table->integer('gramaje');

            $table->foreign('id_papel')->references('id_papel')->on('cat_papel');

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
        Schema::drop('cat_pap_gramaje');
    }
}

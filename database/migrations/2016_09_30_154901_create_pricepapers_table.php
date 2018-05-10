<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricepapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precio_papel', function (Blueprint $table) {
            $table->increments('id_papel_precio');

            $table->integer('id_papel')->unsigned();
            $table->integer('id_pap_gramaje')->unsigned();
              $table->integer('base_pa');
              $table->integer('altura_pa');
              $table->float('m_base');
              $table->float('m_altura');
              $table->integer('precio');
              $table->integer('cortes');
            $table->foreign('id_papel')->references('id_papel')->on('cat_papel');
            $table->foreign('id_pap_gramaje')->references('id_pap_gramaje')->on('cat_pap_gramaje');

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
        Schema::drop('precio_papel');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuloSistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_sistema', function (Blueprint $table) {
            $table->integer('id_modulo')->unsigned();
            $table->integer('id_sistema')->unsigned();

            $table->foreign('id_modulo')->references('id_modulo')->on('cat_modulo')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sistema')->references('id_sistema')->on('cat_sistema')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['id_modulo', 'id_sistema']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_sistema');
    }
}

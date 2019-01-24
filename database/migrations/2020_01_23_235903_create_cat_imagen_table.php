<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_imagen', function (Blueprint $table) {
            $table->increments('id_imagen');
            $table->binary('imagen');
            $table->integer('solicitud_id')->unsigned();
            $table->timestamps();

            $table->foreign('solicitud_id')
                ->references('id_solicitud')
                ->on('solicitud')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_imagen');
    }
}

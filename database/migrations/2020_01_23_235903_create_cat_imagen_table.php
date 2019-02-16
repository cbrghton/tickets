<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->integer('solicitud_id')->unsigned();
            $table->timestamps();

            $table->foreign('solicitud_id')
                ->references('id_solicitud')
                ->on('solicitud')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        DB::statement('ALTER TABLE cat_imagen ADD imagen LONGBLOB NOT NULL AFTER id_imagen');
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

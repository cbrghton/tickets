<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('id_solicitud');
            $table->string('folio', 30)->unique();
            $table->text('incidencia');
            $table->enum('estatus', ['PENDIENTE', 'RESUELTO']);
            $table->integer('sistema_id')->unsigned();
            $table->integer('user_creacion_id')->unsigned();
            $table->integer('user_respuesta_id')->unsigned()->nullable();
            $table->ipAddress('ip_user_creacion');
            $table->ipAddress('ip_user_respuesta')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->text('respuesta')->nullable();

            $table->foreign('sistema_id')
                ->references('id_sistema')
                ->on('cat_sistema')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('user_creacion_id')
                ->references('id_user')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('user_respuesta_id')
                ->references('id_user')
                ->on('users')
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
        Schema::dropIfExists('solicitud');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_sistema', function (Blueprint $table) {
            $table->increments('id_sistema');
            $table->char('clave_sistema', 5)->nullable();
            $table->string('sistema', 45);
            $table->enum('estatus', ['ALTA', 'BAJA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_sistema');
    }
}

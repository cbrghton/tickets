<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->integer('modulo_id')->unsigned();
            $table->string('rfc', 15)->unique();
            $table->string('nombre', 45);
            $table->string('primer_apellido', 45);
            $table->string('segundo_apellido', 45);
            $table->string('password');
            $table->enum('estatus', ['ALTA', 'BAJA']);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('modulo_id')
                ->references('id_modulo')
                ->on('cat_modulo')
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
        Schema::dropIfExists('users');
    }
}

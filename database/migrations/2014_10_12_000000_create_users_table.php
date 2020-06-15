<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id')->comment('Identificador único del registro');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password')->comment('Contraseña cifrada');
                $table->boolean('active')->default(true)
                      ->comment('Estatus actual del usuario. (False) inactivo, (True) activo');
                $table->timestamp('email_verified_at')->nullable()
                      ->comment('validación para determinar si la dirección de correo fue verificada');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
            });
        };
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

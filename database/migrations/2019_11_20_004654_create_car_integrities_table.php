<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\CarIntegrityPlan;
use App\User;
use App\Model;


class CreateCarIntegritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_integrities', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Datos de la persona solicitante
            $table->string('name');//nombre
            $table->string('last_name');//apellido
            $table->string('cedule');//cedula
            $table->timestamp('date')->nullable();//fecha nacimiento
            $table->mediumText('address');//dirección 
            $table->string('sexo');//sexo
            $table->string('civil_state');//estado civil
            $table->string('activiti');//actividad
            $table->string('phone');//telefono
            $table->string('phone2');//telefono
            $table->string('email');//email
            // Datos de Auto
            $table->string('marca');//marca
            $table->string('modelo');//modelo
            $table->string('uso');//uso
            $table->string('tipo');//tipo
            $table->string('placa');//placa
            $table->string('serial_motor');//serial de motor
            $table->string('serial_chasis');//serial de chasis
            // plan comercial
            $table->bigInteger('plan_auto_id')->unsigned();//estado municipio parroquia
            $table->foreign('plan_auto_id')->references('id')->on('car_integrity_plans');// clave
            $table->string('plan');//plan seleccionado
            $table->string('coverage');//plan monto
            $table->string('price');//precio
            $table->string('deductible');//plan dedusible
            //Aliado comercial
            $table->bigInteger('user_id')->unsigned();//usuario creador
            $table->foreign('user_id')->references('id')->on('users');// clave foranea
            //automovil
            $table->integer('auto_id')->unsigned();//modelo de carro
            $table->foreign('auto_id')->references('id')->on('car_models');// clave foranea
            $table->timestamps();//tiempo en que se creo 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_integrities');
    }
}

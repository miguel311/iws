<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//plan
use App\Integrity_plan_auto;
// autos
use App\Uso;
use App\Marca;
use App\Modelo;

class CreateIntegrityAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //plan
        Schema::create('integrity_plan_autos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');//nombre
            $table->string('price');//precio
            $table->longText('description');//descripción de plan
            $table->bigInteger('prima');//prima
            $table->timestamps();
        });

        //AUTOS
        Schema::create('usos', function($table)
        {
            $table->increments('id');
            $table->string('uso');;
        });

        Schema::create('marcas', function($table)
        {
            $table->increments('id');
            $table->integer('uso_id')->unsigned();
            $table->string('marca');
            $table->foreign('uso_id')->references('id')->on('usos');
        });

        Schema::create('modelos', function($table)
        {
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->string('modelo');
            $table->foreign('marca_id')->references('id')->on('marcas');
        });



        // integrity autos
        Schema::create('integrity__autos', function (Blueprint $table) {
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
            $table->foreign('plan_auto_id')->references('id')->on('Integrity_plan_autos');// clave
            $table->string('plan');//plan seleccionado
            $table->string('monto');//plan monto
            $table->string('dedusible');//plan dedusible
            //Aliado comercial
            $table->bigInteger('user_id')->unsigned();//usuario creador
            $table->foreign('user_id')->references('id')->on('users');// clave foranea
            $table->timestamps();//tiempo en que se creo 
            //automovil
            $table->integer('auto_id')->unsigned();//estado municipio parroquia
            $table->foreign('auto_id')->references('id')->on('modelos');// clave
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrity_plan_autos');
        Schema::drop('usos');
        Schema::drop('marcas');
        Schema::drop('modelos');
        Schema::dropIfExists('integrity__autos');
    }
}
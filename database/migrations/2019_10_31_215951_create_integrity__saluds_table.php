<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//plan
use App\Integrity_plan_persona;
// estados
use App\Estado;
use App\Municipio;
use App\Parroquia;


class CreateIntegritySaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //PLAN
        Schema::create('integrity_plan_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');//nombre
            $table->string('price');//precio
            $table->longText('description');//descripción de plan
            $table->bigInteger('prima');//prima
            $table->timestamps();
        });

        //ESTADO MUNICIPIO Y PARROQUIA
        Schema::create('estados', function($table)
        {
            $table->increments('id');
            $table->string('estado');;
        });

        Schema::create('municipios', function($table)
        {
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->string('municipio');
            $table->foreign('estado_id')->references('id')->on('estados');
        });

        Schema::create('parroquias', function($table)
        {
            $table->increments('id');
            $table->integer('municipio_id')->unsigned();
            $table->string('parroquia');
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });



        //Registrar Cotizacion 
        Schema::create('integrity__saluds', function (Blueprint $table) {
            $table->bigIncrements('id');

            //Datos de la persona solicitante
            $table->string('name')->nullable();//nombre
            $table->string('last_name')->nullable();//apellido
            $table->string('cedule_type')->nullable();//cedula o rif
            $table->string('cedule')->nullable();//cedula o rif
            // $table->mediumText('address')->nullable();//dirección 
            $table->string('phone_local')->nullable();//telefono
            $table->string('phone_local_type')->nullable();//telefono
            $table->string('phone_movile_type')->nullable();//telefono
            $table->string('phone_movile')->nullable();//telefono
            $table->string('email')->nullable();//email

            // Datos Contratante 
            // $table->string('contractor');//array de contratantes o segurados
            // $table->bigInteger('contractor_id')->unsigned();//plan
            // $table->foreign('contractor_id')->references('id')->on('cotiza_contractors');// clave foranea





            // $table->longText('history');//historial de enfermedades 
            // $table->string('ocupation');//ocupacion

            // plan comercial
            $table->bigInteger('plan_persona_id')->unsigned();//plan
            $table->foreign('plan_persona_id')->references('id')->on('integrity_plan_personas');// clave foranea
            //Aliado comercial
            $table->string('suma')->nullable();//suma a cancelar
            $table->string('cuota')->nullable();//cuota a cancelar
            $table->string('deducible')->nullable();//deducible a descontar
            $table->string('forma_pago')->nullable();//forma de pago
            $table->bigInteger('user_id')->unsigned();//usuario creador
            $table->foreign('user_id')->references('id')->on('users');// clave foranea


            $table->timestamps();//tiempo en que se creo 
        });
    }
                // ->nullable(); //para tablas que pueden estar vacias
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrity_plan_personas');
        Schema::drop('estados');
        Schema::drop('municipios');
        Schema::drop('parroquias');
        Schema::dropIfExists('integrity__saluds');
    }
}

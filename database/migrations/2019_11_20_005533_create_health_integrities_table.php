<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\PersonIntegrityPlan;


class CreateHealthIntegritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_integrities', function (Blueprint $table) {
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
            $table->foreign('plan_persona_id')->references('id')->on('person_integrity_plans');// clave foranea
            //Aliado comercial
            $table->string('suma')->nullable();//suma a cancelar
            $table->string('cuota')->nullable();//cuota a cancelar
            $table->string('deducible')->nullable();//deducible a descontar
            $table->string('forma_pago')->nullable();//forma de pago
            $table->bigInteger('user_id')->unsigned();//usuario creador
            $table->foreign('user_id')->references('id')->on('users');// clave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_integrities');
    }
}

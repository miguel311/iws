<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizaContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // contratantes de cotizacion 
        Schema::create('cotiza_contractors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('integrity_saluds_id')->unsigned();
            $table->foreign('integrity_saluds_id')->references('id')->on('integrity__saluds');// clave foranea
            $table->string('name');//nombre
            $table->string('last_name');//apellido
            $table->string('sexo');//sexo
            $table->timestamp('date')->nullable();//fecha nacimiento
            $table->string('parent');//parentesco
            $table->string('mother');//maternidad
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
        Schema::dropIfExists('cotiza_contractors');
    }
}

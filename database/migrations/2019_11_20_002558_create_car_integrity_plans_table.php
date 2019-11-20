<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarIntegrityPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_integrity_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');//nombre
            $table->longText('description');//descripción de plan
            $table->bigInteger('coverage');//Cobertura
            $table->string('price');//precio
            $table->string('deductible');//deducible
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
        Schema::dropIfExists('car_integrity_plans');
    }
}

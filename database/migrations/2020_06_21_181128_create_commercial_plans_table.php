<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @class      CreateCommercialPlansTable
 * @brief      Crear tabla planes comerciales
 *
 * Gestiona la creación o eliminación de la tabla de planes comerciales
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class CreateCommercialPlansTable extends Migration
{
    /**
     * Método que ejecuta las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function up()
    {
        if (!Schema::hasTable('commercial_plans')) {
            Schema::create('commercial_plans', function (Blueprint $table) {
                $table->id()->comment('Identificador único del registro');
                $table->string('name')->comment('Nombre del plan comercial');
                $table->longText('description')->comment('Descripción del plan comercial');
                $table->bigInteger('coverage')->comment('Cobertura del plan comercial');
                $table->string('price')->comment('Precio total del plan comercial');
                $table->string('deductible')->comment('Deducible del plan comercial');
                /** Revisar oceanica */
                $table->enum('type', ['HCM', 'FUNE', 'RCV'])->default('HCM')
                      ->comment('Tipo de plan comercial: Salud=(HCM, HC, FUNE, APN), Vehiculo=(RCV)');
                $table->timestamps();
                $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
            });
        };
    }

    /**
     * Método que elimina las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function down()
    {
        Schema::dropIfExists('commercial_plans');
    }
}

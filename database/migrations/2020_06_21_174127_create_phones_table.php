<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @class      CreatePhonesTable
 * @brief      Crear tabla teléfonos
 *
 * Gestiona la creación o eliminación de la tabla de teléfonos
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class CreatePhonesTable extends Migration
{
    /**
     * Método que ejecuta las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function up()
    {
        if (!Schema::hasTable('phones')) {
            Schema::create('phones', function (Blueprint $table) {
                $table->id()->comment('Identificador único del registro');
                $table->string('area_code')->comment('Código de área');
                $table->string('number')->comment('Número telefónico');
                $table->enum('type', ['M', 'H'])->default('H')
                      ->comment('Tipo de teléfono: (M)óvil, (H)abitación');
                $table->timestamps();
                $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
            });
        }
    }

    /**
     * Método que elimina las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}

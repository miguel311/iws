<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @class      CreateQuoteContractorsTable
 * @brief      Crear tabla contratantes de cotizaciones
 *
 * Gestiona la creación o eliminación de la tabla de contratantes de cotizaciones
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class CreateQuoteContractorsTable extends Migration
{
    /**
     * Método que ejecuta las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function up()
    {
        if (!Schema::hasTable('quote_contractors')) {
            Schema::create('quote_contractors', function (Blueprint $table) {
                $table->id()->comment('Identificador único del registro');
                $table->string('first_name')->comment('Nombre del contratante');
                $table->string('last_name')->comment('Apellido del contratante');
                $table->enum('gender', ['F', 'M'])->default('M')
                      ->comment('Género del contratante: (F)emenino, (M)asculino');

                $table->date('birthdate')->comment('Fecha de nacimiento del contratante');
                $table->string('parent', 20)->comment('Parentesto del contratante');
                $table->boolean('maternity')->default(false)
                      ->comment('Establece si el contratante está por maternidad o no');

                $table->foreignId('health_quote_id')->nullable()
                      ->comment('Identificador único de la cotización de salud')->constrained()
                      ->onDelete('restrict')->onUpdate('cascade');
                $table->timestamps();
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
        Schema::dropIfExists('quote_contractors');
    }
}

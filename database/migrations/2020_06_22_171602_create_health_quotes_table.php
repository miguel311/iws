<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @class      CreateHealthQuotesTable
 * @brief      Crear tabla cotización de salud
 *
 * Gestiona la creación o eliminación de la tabla de cotizaciones de salud
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class CreateHealthQuotesTable extends Migration
{
    /**
     * Método que ejecuta las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function up()
    {
        if (!Schema::hasTable('health_quotes')) {
            Schema::create('health_quotes', function (Blueprint $table) {
                $table->id()->comment('Identificado único del registro');
                /** Datos de la persona solicitante */
                $table->string('name')->comment('Nombre del solicitante');
                $table->string('last_name')->comment('Apellido del solicitante');
                $table->string('document_type', 5)->comment('Tipo de documento de identificación del solicitante');
                $table->string('document_number', 20)
                      ->comment('Número del documento de identificación del solicitante');
                $table->string('email')->comment('Correo electrónico del solicitante');
                
                $table->bigInteger('local_phone_id')->unsigned()
                      ->comment('Identificador único del teléfono de habitación del solicitante');
                $table->foreign('local_phone_id')->references('id')->on('phones')
                      ->onDelete('restrict')->onUpdate('cascade');
                
                $table->bigInteger('mobile_phone_id')->unsigned()
                      ->comment('Identificador único del teléfono móvil del solicitante');
                $table->foreign('mobile_phone_id')->references('id')->on('phones')
                      ->onDelete('restrict')->onUpdate('cascade');

                /** Plan comercial */
                $table->foreignId('commercial_plan_id')->comment('Identificador único del plan comercial')
                      ->constrained()->onDelete('restrict')->onUpdate('cascade');

                /** Productor de seguro */
                $table->foreignId('user_id')->comment('Identificador único del usuario del productor de seguro')
                      ->constrained()->onDelete('restrict')->onUpdate('cascade');

                /** Revisar: Creo que va dentro de la tabla commercial_plan */
                /** Aliado comercial */
                $table->string('sum')->nullable()->comment('Suma a cancelar');
                $table->string('fee')->nullable()->comment('Cuota a cancelar');
                $table->string('deductible')->nullable()->comment('Deducible a descontar');
                $table->string('way_to_pay')->nullable()->comment('Forma de pago');

                $table->timestamps();
                $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');

                /** Revisar: Esto ya estaba comentado */
                // $table->mediumText('address')->nullable();//dirección 
                // $table->longText('history');//historial de enfermedades 
                // $table->string('ocupation');//ocupacion
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
        Schema::dropIfExists('health_quotes');
    }
}

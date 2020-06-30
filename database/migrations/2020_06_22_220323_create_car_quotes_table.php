<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @class      CreateCarQuotesTable
 * @brief      Crear tabla cotización de automóviles
 *
 * Gestiona la creación o eliminación de la tabla de cotizaciones de automóviles
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class CreateCarQuotesTable extends Migration
{
    /**
     * Método que ejecuta las migraciones
     *
     * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
     * @return    void
     */
    public function up()
    {
        if (!Schema::hasTable('car_quotes')) {
            Schema::create('car_quotes', function (Blueprint $table) {
                $table->id()->comment('Identificador único del registro');
                /** Datos de la persona solicitante */
                $table->string('name')->comment('Nombre del solicitante');
                $table->string('last_name')->comment('Apellido del solicitante');
                $table->string('document_type', 5)->comment('Tipo de documento de identificación del solicitante');
                $table->string('document_number', 20)
                      ->comment('Número del documento de identificación del solicitante');
                $table->date('birthdate')->comment('Fecha de nacimiento del solicitante');

                $table->text('address')->comment('Dirección del solicitante');
                $table->enum('gender', ['F', 'M'])->default('M')
                      ->comment('Género del solicitante: (F)emenino, (M)asculino');
                $table->string('marital_status', 20);
                $table->string('activity')->comment('Descripción de la actividad o profesión del solicitante');
                $table->string('email')->comment('Correo electrónico del solicitante');

                $table->bigInteger('local_phone_id')->unsigned()
                      ->comment('Identificador único del teléfono de habitación del solicitante');
                $table->foreign('local_phone_id')->references('id')->on('phones')
                      ->onDelete('restrict')->onUpdate('cascade');
                
                $table->bigInteger('mobile_phone_id')->unsigned()
                      ->comment('Identificador único del teléfono móvil del solicitante');
                $table->foreign('mobile_phone_id')->references('id')->on('phones')
                      ->onDelete('restrict')->onUpdate('cascade');

                /** Datos de auto */
                $table->string('marca')->comment('Marca del automóvil');
                $table->string('model')->comment('Modelo del automóvil');
                $table->string('type')->comment('Tipo de automóvil');
                $table->string('use')->comment('Uso del automóvil');
                $table->string('license_plate')->comment('Placa del automóvil');
                $table->string('engine_serial')->comment('Serial del motor del automóvil');
                $table->string('chassis_serial')->comment('Serial del chasis del automóvil');

                /** Plan comercial */
                $table->foreignId('commercial_plan_id')->comment('Identificador único del plan comercial')
                      ->constrained()->onDelete('restrict')->onUpdate('cascade');

                /** Productor de seguro */
                $table->foreignId('user_id')->nullable()
                      ->comment('Identificador único del usuario del productor de seguro')->constrained()
                      ->onDelete('restrict')->onUpdate('cascade');

                /** Revisar */
                /** Automóvil */
                $table->foreignId('car_model_id')->nullable()
                      ->comment('Identificador único del automóvil')->constrained()
                      ->onDelete('restrict')->onUpdate('cascade');
                
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
        Schema::dropIfExists('car_quotes');
    }
}

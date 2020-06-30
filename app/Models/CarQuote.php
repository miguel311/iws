<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class     CarQuote
 * @brief     Datos de cotizaciones de automóviles
 *
 * Gestiona el modelo de datos para las cotizaciones de automóviles
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class CarQuote extends Model
{
    use SoftDeletes;

    /**
     * Lista de atributos para la gestión de fechas
     * @var array $dates
     */
    protected $dates = ['deleted_at'];

    /**
     * Lista de atributos que pueden ser asignados masivamente
     * @var array $fillable
     */
    protected $fillable = [
        'name', 'last_name', 'document_type', 'document_number', 'birthdate',
        'address', 'gender', 'marital_status', 'activity', 'email', 'local_phone_id',
        'mobile_phone_id', 'marca', 'model', 'type', 'use', 'license_plate',
        'engine_serial', 'chassis_serial', 'commercial_plan_id', 'user_id', 'car_model_id'
    ];

    /**
     * Método que obtiene el teléfono local asociado al registro
     *
     * @return object Objeto con el registro relacionados al modelo Phone
     */
    public function localPhone()
    {
        return $this->belongsTo(Phone::class, 'local_phone_id');
    }

    /**
     * Método que obtiene el teléfono móvil asociado al registro
     *
     * @return object Objeto con el registro relacionados al modelo Phone
     */
    public function mobilePhone()
    {
        return $this->belongsTo(Phone::class, 'mobile_phone_id');
    }

    /**
     * Método que obtiene el plan comercial asociado al registro
     *
     * @return object Objeto con el registro relacionados al modelo CommercialPlan
     */
    public function commercialPlan()
    {
        return $this->belongsTo(CommercialPlan::class);
    }

    /**
     * Método que obtiene el usuario del productor de seguro asociado al registro
     *
     * @return object Objeto con el registro relacionados al modelo User
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * Método que obtiene el automóvil asociado al registro
     *
     * @return object Objeto con el registro relacionados al modelo CarModel
     */
    public function carModel()
    {
        return $this->belongsTo(\App\CarModel::class);
    }
}

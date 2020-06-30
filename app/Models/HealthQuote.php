<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class     HealthQuote
 * @brief     Datos de cotizaciones de salud
 *
 * Gestiona el modelo de datos para las cotizaciones de salud
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class HealthQuote extends Model
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
        'name', 'last_name', 'document_type', 'document_number', 'email',
        'local_phone_id', 'mobile_phone_id', 'commercial_plan_id', 'user_id',
        'sum', 'fee', 'deductible', 'way_to_pay'
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
     * Método que obtiene el usuario del productor de seguro asociado al registro
     *
     * @return object Objeto con el registro relacionados al modelo User
     */
    public function quoteContractors()
    {
        return $this->hasMany(QuoteContractor::class);
    }
}
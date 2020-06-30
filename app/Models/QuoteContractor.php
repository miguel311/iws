<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class     QuoteContractor
 * @brief     Datos de contratantes de cotizaciones
 *
 * Gestiona el modelo de datos para los contratantes de cotizaciones
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class QuoteContractor extends Model
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
        'name', 'last_name', 'gender', 'birthdate', 'parent', 'maternity',
        'health_quote_id'
    ];

    /**
     * Método que obtiene la cotización de salud asociada al registro
     *
     * @return object Objeto con el registro relacionados al modelo HealthQuote
     */
    public function healthQuote()
    {
        return $this->belongsTo(HealthQuote::class);
    }
}

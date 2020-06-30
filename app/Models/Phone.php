<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class     Phone
 * @brief     Datos de teléfonos
 *
 * Gestiona el modelo de datos para los teléfonos
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class Phone extends Model
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
        'area_code', 'number', 'type'
    ];
}

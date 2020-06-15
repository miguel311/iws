<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class Parish
 * @brief Datos de Parroquias
 *
 * Gestiona el modelo de datos para las Parroquias
 */
class Parish extends Model
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
    protected $fillable = ['name', 'code', 'municipality_id'];

    /**
     * Método que obtiene el Municipio de una Parroquia
     *
     * @return object Objeto con los registros relacionados al modelo Municipality
     */
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}

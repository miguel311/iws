<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class Estate
 * @brief Datos de Estados
 *
 * Gestiona el modelo de datos para los Estados
 */
class Estate extends Model
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
    protected $fillable = ['name', 'code'];

    /**
     * Método que obtiene los Municipios de un Estado
     *
     * @return object Objeto con los registros relacionados al modelo Minicipality
     */
    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
}

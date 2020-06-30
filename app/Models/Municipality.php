<?php

/** Modelos generales de base de datos */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @class     Municipality
 * @brief     Datos de municipios
 *
 * Gestiona el modelo de datos para los municipios
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class Municipality extends Model
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
        'name', 'code', 'estate_id'
    ];

    /**
     * Método que obtiene el Estado de un Municipio
     *
     * @return object Objeto con los registros relacionados al modelo Estate
     */
    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    /**
     * Método que obtiene las Parroquias asociadas a un Municipio
     *
     * @return object Objeto con los registros relacionados al modelo Parish
     */
    public function parish()
    {
        return $this->hasMany(Parish::class);
    }
}

<?php

/** Modelos generales de base de datos */
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Roles\Traits\HasRoleAndPermission;

/**
 * @class     User
 * @brief     Datos de usuarios
 *
 * Gestiona el modelo de datos para los usuarios
 *
 * @author    Henry Paredes <hparedes@cenditel.gob.ve> | <henryp2804@gmail.com>
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    use HasRoleAndPermission;

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
        'name', 'email', 'password',
    ];

    /**
     * Lista de atributos ocultos para la gestión de matrices
     * @var array $hidden
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Lista de atributos que deben ser convertidos a tipos nativos
     * @var array $casts
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

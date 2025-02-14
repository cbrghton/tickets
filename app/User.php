<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The name of primary key
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'modulo_id', 'rfc', 'nombre', 'primer_apellido', 'segundo_apellido', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Genera la relación entre la tabla de Modulos y de Usuarios
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function module()
    {
        return $this->hasOne('App\Models\CatModulo', 'id_modulo', 'modulo_id');
    }

    /**
     * Verifica que tenga un rol asignado
     *
     * @param string
     * @return boolean
     */
    public function hasRole($role)
    {
        if ($this->roles()->where('nombre', $role)->first()) {
            return true;
        }

        return false;
    }

    /**
     * Genera la relación entre la tabla de Roles y de Usuarios
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('\App\Models\Role', 'role_user', 'user_id', 'rol_id');
    }

    /**
     * Genera la relación entre la Solicitud y el Usuario que creó la Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketCreate()
    {
        return $this->hasMany('App\Models\Solicitud', 'user_creacion_id');
    }

    /**
     * Genera la relación entre la Solicitud y el Usuario que respondió la Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ticketResponse()
    {
        return $this->hasMany('App\Models\Solicitud', 'user_respuesta_id');
    }
}

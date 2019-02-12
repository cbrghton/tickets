<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Solicitud
 * @package App\Models
 */
class Solicitud extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'solicitud';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_solicitud';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'incidencia', 'sistema_id',
    ];

    /**
     * Genera la relación entre la tabla de Solicitud y Sistema
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function system()
    {
        return $this->hasOne('App\Models\CatSistema', 'id_sistema', 'sistema_id');
    }

    /**
     * Genera la relación entre la Solicitud y el Usuario que creó la Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_create()
    {
        return $this->hasOne('App\User', 'id_user', 'user_creacion_id');
    }

    /**
     * Genera la relación entre la Solicitud y el Usuario que respondió la Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_response()
    {
        return $this->hasOne('App\User', 'id_user', 'user_respuesta_id');
    }
}

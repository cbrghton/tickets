<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CatModulo
 * @package App\Models
 */
class CatModulo extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cat_modulo';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_modulo';

    /**
     * Genera la relación entre la tabla de Modulos y de Usuarios
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'modulo_id');
    }
}

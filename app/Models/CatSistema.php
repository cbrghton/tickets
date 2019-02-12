<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CatSistema
 * @package App\Models
 */
class CatSistema extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cat_sistema';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_sistema';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Genera la relación entre la tabla de Sistema y de Solicitud
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Solicitud', 'sistema_id');
    }
}

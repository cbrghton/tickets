<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}

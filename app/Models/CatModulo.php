<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatModulo extends Model
{
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
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    protected $table='cat_sistema';

    protected $primaryKey="id_sistema";

    public $timestamps=false;

    protected $fillable = [
        'sistema',
        'estatus',

    ];

    protected $guarded = [

    ];
}

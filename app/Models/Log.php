<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $primaryKey = 'id_log';

    protected $fillable = [
        'user_id', 'evento', 'entrada'
    ];
}

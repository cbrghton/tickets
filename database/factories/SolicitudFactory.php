<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Solicitud::class, function (Faker $faker) {
    return [
        'folio' => $faker->unique()->numberBetween(0, 10),
        'incidencia' => $faker->text,
        'estatus' => 'PENDIENTE',
        'sistema_id' => 1,
        'user_creacion_id' => 1,
        'ip_user_creacion' => $faker->ipv4
    ];
});

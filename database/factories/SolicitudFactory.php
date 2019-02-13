<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Solicitud::class, function (Faker $faker) {
    return [
        'incidencia' => $faker->text,
        'estatus' => 'PENDIENTE'
    ];
});

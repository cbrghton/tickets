<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CatModulo::class, function (Faker $faker) {
    return [
        'clave_modulo' => $faker->numberBetween(0, 10),
        'modulo' => $faker->streetName,
        'estatus' => 'ALTA'
    ];
});

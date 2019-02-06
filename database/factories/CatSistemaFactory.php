<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CatSistema::class, function (Faker $faker) {
    return [
        'clave_sistema' => $faker->unique()->numberBetween(0, 10),
        'sistema' => $faker->name,
        'estatus' => 'ALTA'
    ];
});

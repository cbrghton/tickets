<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CatModulo::class, function (Faker $faker) {
    return [
        'modulo' => $faker->streetName,
    ];
});

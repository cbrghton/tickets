<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CatSistema::class, function (Faker $faker) {
    return [
        'sistema' => $faker->name,
    ];
});

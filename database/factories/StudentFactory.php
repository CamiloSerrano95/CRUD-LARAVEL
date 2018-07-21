<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'identification' => str_random(10),
        'name' => $faker->name,
        'lastname' => $faker->name,
        'university' => $faker->sentence(4),
    ];
});

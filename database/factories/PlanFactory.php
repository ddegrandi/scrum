<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = rand(1, 3), $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 1000),
        'active' => $faker->boolean(rand(0, 100))
    ];
});

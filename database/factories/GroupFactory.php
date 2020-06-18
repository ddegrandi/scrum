<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use App\Models\Plan;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'plan_id' => $faker->boolean(rand(0, 100)) ? Plan::inRandomOrder()->first()->id : null,
        'name' => $faker->sentence($nbWords = rand(1, 3), $variableNbWords = true),
        'active' => $faker->boolean(rand(0, 100))
    ];
});

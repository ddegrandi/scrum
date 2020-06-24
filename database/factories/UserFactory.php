<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Group;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'group_id' => Group::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'cpf'=> $faker->cpf(false),
        'rg' => $faker->rg(false),
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => '123456',
        'hash' => Str::random(20),
        'admin' => $faker->boolean(rand(0, 100))

    ];
});

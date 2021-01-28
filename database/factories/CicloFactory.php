<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ciclo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Ciclo::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'img' =>$faker->name,
    ];
});

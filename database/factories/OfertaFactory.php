<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Oferta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Oferta::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'descripcion' => $faker->paragraph,
        'fecha_max' => $faker->date($format = 'Y-m-d'),
        'num_candidatos' => $faker->randomDigit,
        'ciclo_id' => \app\ciclo::all()->random()->id,
    ];
});

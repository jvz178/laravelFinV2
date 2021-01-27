<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Noticia;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {
    return [
        'titulo' =>$faker->name,
        'imagen' =>$faker->name,
        'descripcion' =>$faker->paragraph,
        'ciclo_id' => \app\ciclo::all()->random()->id,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Requisito;
use Faker\Generator as Faker;

$factory->define(Requisito::class, function (Faker $faker) {
    return [
        'descripcion'=>$faker->paragraph,
        'oferta_id'=>\app\oferta::all()->random()->id,
    ];
});

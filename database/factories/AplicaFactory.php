<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aplica;
use Faker\Generator as Faker;

$factory->define(Aplica::class, function (Faker $faker) {
    return [
        'oferta_id' => \app\oferta::all()->random()->id,
        'usuario_id' => \app\user::all()->random()->id,
    ];
});

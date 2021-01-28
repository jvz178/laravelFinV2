<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Failed_Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Failed_Job::class, function (Faker $faker) {
    return [
        'uuid' =>$faker->name,
        'connection' =>$faker->name,
        'queue' =>$faker->name,
        'payload' =>$faker->sentence,
        'exception' =>$faker->sentence,
    ];
});

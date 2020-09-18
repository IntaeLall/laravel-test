<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Questionnaire;
use Faker\Generator as Faker;

$factory->define(Questionnaire::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'open' => $faker->boolean,
    ];
});

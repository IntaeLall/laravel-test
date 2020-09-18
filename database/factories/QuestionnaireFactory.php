<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;

use App\Models\Questionnaire;
use Faker\Generator as Faker;

$factory->define(Questionnaire::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->name,
        'slug' => Str::slug($name),
        'open' => $faker->boolean,
    ];
});

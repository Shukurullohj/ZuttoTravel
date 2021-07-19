<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Perfecture;
use Faker\Generator as Faker;

$factory->define(Perfecture::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

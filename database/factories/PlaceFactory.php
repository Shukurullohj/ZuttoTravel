<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Place;
use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'body' => $faker->text,
        'path' => $faker->text,

        'price' => $faker->randomDigit,
        'user_id' => factory(App\User::class),
        'perfecture_id' => factory(App\Perfecture::class),
    ];
});

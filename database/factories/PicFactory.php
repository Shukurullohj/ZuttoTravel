<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pic;
use Faker\Generator as Faker;

$factory->define(Pic::class, function (Faker $faker) {
    return [
        'title' => $this->faker->name,
        'picture' => $this->faker->imageUrl(200, 180, 'cats', true, 'Faker')
    ];
});

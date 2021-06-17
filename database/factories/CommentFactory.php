<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text,
        'user_id' => factory(App\User::class),
        'place_id' => factory(App\Place::class)
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl($width = 640, $height = 480), // secret
        'user_id' => App\User::all()->random()->id,
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category' => $faker->word,
        'description' => $faker->text,
        'image' => $faker->imageUrl(800, 600, 'cats', true, 'Faker', true)
    ];
});

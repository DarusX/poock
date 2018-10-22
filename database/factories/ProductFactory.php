<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product' => $faker->sentence,
        'description' => $faker->text,
        'price' => $faker->randomFloat
    ];
});

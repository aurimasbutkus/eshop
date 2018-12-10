<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->words(2, true)),
        'price' => $faker->numberBetween(1, 1000),
        'description' => ucfirst($faker->words(10, true)),
        'specification' => ucfirst($faker->words(10, true)),
        'config' => $faker->words(10, true),
        'category' => ucfirst($faker->word),
        'quantity' => $faker->numberBetween(1, 10),
        'status' => 'active'
    ];
});

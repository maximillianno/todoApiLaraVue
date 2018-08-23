<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->firstName,
        'description' => $faker->text,
        'image' => $faker->name,
        'price' => $faker->randomNumber(3),
    ];
});

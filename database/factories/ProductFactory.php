<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween($min = 0, $max = 9999999),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(0, 100)
    ];
});

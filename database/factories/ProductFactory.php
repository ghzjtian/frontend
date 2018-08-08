<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'author_id' => random_int(0, 2),
        'category_id' => random_int(0, 5),
        'title' => $faker->title,
        'excerpt' => $faker->sentence,
        'body' => $faker->sentence,
        'image_align_right' => $faker->boolean,
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT', 'PENDING']),
    ];
});
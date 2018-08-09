<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'author_id' => random_int(0, 2),
        'category_id' => random_int(0, 5),
        'title' => $faker->word,
        'excerpt' => $faker->sentence,
        'body' => $faker->sentence,
        'show_on_home'=>$faker->boolean,
        'image'=>'https://www.w3schools.com/w3css/img_woods.jpg',
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT', 'PENDING']),
    ];
});

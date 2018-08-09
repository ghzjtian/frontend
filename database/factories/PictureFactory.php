<?php

use Faker\Generator as Faker;

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'image' => 'https://www.w3schools.com/w3images/tech_sound.jpg',
        'description' => $faker -> sentence,
        'show_on_home' => $faker -> boolean,
    ];
});

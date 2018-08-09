<?php

use Faker\Generator as Faker;

$factory->define(App\About::class, function (Faker $faker) {
    return [
        'icon' =>'fa fa-id-card',//https://www.w3schools.com/icons/fontawesome_icons_webapp.asp
        'title' => $faker->word,
        'ability' => $faker->numberBetween(0,150),
        'show' => $faker -> boolean,
    ];
});

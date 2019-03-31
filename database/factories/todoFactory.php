<?php

use Faker\Generator as Faker;

$factory->define(App\todo::class, function (Faker $faker) {
    return [
        //
        'TodoName' => $faker->sentence(2),
        'Description' => $faker->sentence(5)
        
    ];
});

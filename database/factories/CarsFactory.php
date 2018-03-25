<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement([ 'Ford', 'Honda' , 'Toyota']),
        'Model' => $faker->randomElement([ 'Accord', 'Fusion','Tauras','Avalon','Camry','Civic' ]),
        'Year' => $faker->year($max='now')
    ];
});

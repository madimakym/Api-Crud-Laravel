<?php

use Faker\Generator as Faker;

$factory->define(App\Peoples::class, function (Faker $faker) {
    return [
        'firstname' => $faker->text(20),
        'lastname' => $faker->text(20),
        'mail' => $faker->email,
        'phone' => '783446723',
        'adress' => $faker->text(200)
    ];
});

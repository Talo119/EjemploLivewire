<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clients;
use Faker\Generator as Faker;

$factory->define(Clients::class, function (Faker $faker) {
    return [
        'nombre'    => $faker->name,
        'direccion' => $faker->address,
        'telefono'  => $faker->phoneNumber,
        'email'     => $faker->safeEmail,
    ];
});

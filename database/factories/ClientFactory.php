<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

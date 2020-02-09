<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Player\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

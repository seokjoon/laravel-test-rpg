<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Quest\Quest;
use Faker\Generator as Faker;

$factory->define(Quest::class, function (Faker $faker) {
    return [
        'player_id' => \App\Models\Player\Player::inRandomOrder()->first()->id,
        'title' => $faker->sentence,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client\ClientPlayer;
use Faker\Generator as Faker;

$factory->define(ClientPlayer::class, function (Faker $faker) {

    $idClient = \App\Models\Client\Client::inRandomOrder()->first()->id;
    $ids = ClientPlayer::whereClientId($idClient)->get()->pluck('player_id')->toArray();
    $idPlayer = \App\Models\Player\Player::whereNotIn('id', $ids)->inRandomOrder()->first()->id;

    return [
        'client_id' => $idClient,
        'player_id' => $idPlayer,
    ];
});

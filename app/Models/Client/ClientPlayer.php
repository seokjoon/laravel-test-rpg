<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class ClientPlayer extends Model
{
    protected $fillable = [
        'client_id',
        'player_id',
    ];

    protected $table = 'client_player';
}

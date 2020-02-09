<?php

namespace App\Models\Client;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
       'name',
    ];

    /**
     * client-player: 다대다
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
}

<?php

namespace App\Models\Player;

use App\Models\Client\Client;
use App\Models\Quest\Quest;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * client-player: 다대다
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    /**
     * quest-player: 다대일
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quests()
    {
        return $this->hasMany(Quest::class);
    }
}

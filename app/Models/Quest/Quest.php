<?php

namespace App\Models\Quest;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    protected $fillable = [
        'worker_id',
        'title',
    ];

    /**
     * quest-player: 다대일
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}

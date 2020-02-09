<?php

namespace App\Models\Quest;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    protected $fillable = [
        'worker_id',
        'title',
    ];
}

<?php

namespace App\Models;

use App\Models\User;
use App\Models\Leagues;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leaderboards extends Model
{
    /** @use HasFactory<\Database\Factories\LeaderboardsFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'league_id',
        'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function leagues()
    {
        return $this->belongsTo(Leagues::class);
    }
}

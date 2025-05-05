<?php

namespace App\Models;

use App\Models\User;
use App\Models\Matches;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rewards extends Model
{
    /** @use HasFactory<\Database\Factories\RewardsFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'match_id',
        'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function matches()
    {
        return $this->belongsTo(Matches::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    /** @use HasFactory<\Database\Factories\MatchesFactory> */
    use HasFactory;


    protected $fillable = [
        'home_team',
        'away_team',
        'result',
        'start_time',
        'status',
    ];

    public function predictions()
    {
        return $this->hasMany(Prediction::class);
    }

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }
}

<?php

namespace App\Models;

use App\Models\User;
use App\Models\Leaderboards;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leagues extends Model
{
    /** @use HasFactory<\Database\Factories\LeaguesFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'creator_id',
        'invite_code',
    ];

    public function members()
    {
        return $this->belongsTo(User::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function leaderboards()
    {
        return $this->hasMany(Leaderboards::class);
    }
}

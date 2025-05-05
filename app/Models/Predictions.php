<?php

namespace App\Models;

use App\Models\Matches;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Predictions extends Model
{
    /** @use HasFactory<\Database\Factories\PredictionsFactory> */
    use HasFactory;
protected $fillables = [
    'user_id',
    'match_id',
    'home_score',
    'away_score',
    'points_rewarded'

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

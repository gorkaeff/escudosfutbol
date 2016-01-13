<?php

namespace App;

use App\Team;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $fillable = ['id', 'team_id', 'session'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
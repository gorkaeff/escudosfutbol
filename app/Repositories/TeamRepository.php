<?php

namespace App\Repositories;

use App\User;
use App\Team;

class TeamRepository
{
    /**
     * Get all of the teams for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function userTeams(User $user)
    {
        return Team::where('user_id', $user->id)->orderBy('created_at', 'asc')->get();
    }
}
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

    public function isTeamForUser(User $user, $team_id)
    {
        $equipo = Team::find($team_id);

        if (!$equipo){
            abort(404);
        }
        
        if ($user->role === 'app_admin')
        {
            return true;
        }

        if ($equipo->user->id === $user->id){
            return true;
        } else {
            //unauthorized
            abort(401);
        }

    }
}
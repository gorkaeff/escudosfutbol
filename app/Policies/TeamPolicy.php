<?php

namespace App\Policies;

use App\User;
use App\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Team  $team
     * @return bool
     */
    public function destroy(User $user, Team $team)
    {
        //dd('Usuario: '.$user->id.' y Usuario Ekipo: '.$team->user_id);
        //dd($user->id === $team->user_id);
        return $user->id === $team->user_id;
    }
}
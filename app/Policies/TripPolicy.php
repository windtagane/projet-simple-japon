<?php

namespace App\Policies;

use App\User;
use App\Trip;
use Illuminate\Auth\Access\HandlesAuthorization;

class TripPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.sudo
     *
     * @return void
     */
    public function __construct()
    {


    }

        function update(User $user, Trip $trip){
            return $user->hasRole('admin') || $user->id === $trip->user_id;
        }

        function delete(User $user, Trip $trip){
            return $user->hasRole('admin') || $user->id === $trip->user_id;
        }
}

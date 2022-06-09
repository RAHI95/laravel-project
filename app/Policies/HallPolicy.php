<?php

namespace App\Policies;

use App\Models\Hall;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HallPolicy
{
    use HandlesAuthorization;

    public function check (User $user, Hall $hall)
    {
        return $user->id === $hall->created_by_id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Hall $hall
     * @return mixed
     */
    public function view(User $user, Hall $hall)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Hall $hall
     * @return mixed
     */
    public function update(User $user, Hall $hall)
    {
        return $this->check($user,$hall);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Hall $hall
     * @return mixed
     */
    public function destroy(User $user, Hall $hall)
    {
        return $this->check($user,$hall);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Hall $hall
     * @return mixed
     */
    public function restore(User $user, Hall $hall)
    {
        return $this->check($user,$hall);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Hall $hall
     * @return mixed
     */
    public function trash(User $user, Hall $hall)
    {
        return $this->check($user,$hall);
    }
}

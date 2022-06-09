<?php

namespace App\Policies;

use App\Models\Stuff;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StuffPolicy
{
    use HandlesAuthorization;

    public function check (User $user, Stuff $stuff)
    {
        return $user->id === $stuff->created_by_id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Stuff  $stuff
     * @return mixed
     */
    public function view(User $user, Stuff $stuff)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Stuff  $stuff
     * @return mixed
     */
    public function update(User $user, Stuff $stuff)
    {
        return $this->check($user,$stuff);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Stuff  $stuff
     * @return mixed
     */
    public function destroy(User $user, Stuff $stuff)
    {
        return $this->check($user,$stuff);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Stuff  $stuff
     * @return mixed
     */
    public function restore(User $user, Stuff $stuff)
    {
        return $this->check($user,$stuff);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Stuff  $stuff
     * @return mixed
     */
    public function trash(User $user, Stuff $stuff)
    {
        return $this->check($user,$stuff);
    }
}

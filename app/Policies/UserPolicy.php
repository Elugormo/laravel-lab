<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user) {
        return true;
    }

    public function create(User $user) {
        return true;
    }

    public function edit(User $user, User $targetUser) {
        return $user->role === 'Superadmin' || ($user->id === $targetUser->creator_user_id && $user->role === 'Editor');
    }

    public function delete(User $user, User $targetUser) {
        return $user->role === 'Superadmin';
    }
}

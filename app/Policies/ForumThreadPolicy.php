<?php

namespace App\Policies;

use App\Models\ForumThread;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumThreadPolicy
{
    use HandlesAuthorization;

    public function before(?User $user, string $ability)
    {
        // You can add admin override here if you have such a flag on users
        // if ($user && $user->is_admin) { return true; }
    }

    public function create(?User $user): bool
    {
        return true; // allow guests to create threads
    }

    public function update(User $user, ForumThread $thread): bool
    {
        return $user->id === $thread->user_id;
    }

    public function delete(User $user, ForumThread $thread): bool
    {
        return $user->id === $thread->user_id;
    }
}



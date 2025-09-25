<?php

namespace App\Policies;

use App\Models\ForumPost;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumPostPolicy
{
    use HandlesAuthorization;

    public function create(?User $user): bool
    {
        return true; // allow guests to reply
    }

    public function delete(User $user, ForumPost $post): bool
    {
        return $user->id === $post->user_id;
    }
}



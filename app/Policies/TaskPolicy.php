<?php

namespace App\Policies;

use App\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function verify(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}

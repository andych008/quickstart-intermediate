<?php

namespace App\Repositories;

use App\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
//        return Task::where('user_id', $user->id)
//                    ->orderBy('created_at', 'asc')
//                    ->get();
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

    public function forUserById(User $user, $id)
    {
        $task = $user->tasks()->where('id', $id)->first();
        if (is_null($task)) {
            return "没找到";
        }
        return $task;
    }

    public function forUserByName(User $user, $name)
    {
//        return $user->tasks()->where('name', 'like', "%$name%")->get();
        return $user->tasks()->like('name', $name)->get();
    }
}

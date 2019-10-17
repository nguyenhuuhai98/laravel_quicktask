<?php

namespace App\Repositories;

use App\Models\User;

class TaskRepository
{

    public function forUser(User $user)
    {
        return $user->tasks()->orderBy('created_at', 'asc')->get();
    }

    public function store(array $data, $id)
    {
        $user = User::find($id);

        return $user->tasks()->create($data);
    }
}

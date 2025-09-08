<?php

namespace App\Repositories;

use App\Models\Task;
use App\Models\TaskGroup;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository
{
    public function getAll(): Collection
    {
        return Task::with('group')->get();
    }

    public function store(Request $request): Task
    {
        return $task = Task::create([
            'description' => $request->description,
        ]);
    }

}

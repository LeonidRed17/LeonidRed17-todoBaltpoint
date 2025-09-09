<?php

namespace App\Repositories;

use app\Models\TaskGroup;
class TaskGroupRepository
{
  public function getAll() : Collection
    {
        return TaskGroup::all();
    }
    public function store(Request $request) : TaskGroup
    {
        return $task = Task::create([
            'description' => $request->description,
        ]);
    }
}

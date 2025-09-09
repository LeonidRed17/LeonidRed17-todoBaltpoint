<?php

namespace App\Repositories;

use App\Models\Task;
use App\Models\TaskGroup;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository
{
    public function getAll(): Collection
    {
        return TaskGroup::with('tasks')->get();
    }

    public function store($request): Task
    {
        $data = $request->validate([
            'groups_names_select' => 'nullable|string|max:30',
            'group_name'       => 'nullable|string|max:30',
            'group_description'      => 'nullable|string|max:60',
            'task_description' => 'required|string|max:30',
        ]);

        if (($data['groups_names_select'] ?? null) === 'default') {
            $group = TaskGroup::create([
                'name' => $data['group_name'],
                'description' => $data['group_description'] ?? '',
            ]);


            $task = Task::create([
                'task_group_id' => $group->id,
                'description' => $data['task_description'],
            ]);
        } else {

            $task = Task::create([
                'task_group_id' => $data['groups_names_select'],
                'description' => $data['task_description'],
            ]);
        }

      return $task;
    }

}

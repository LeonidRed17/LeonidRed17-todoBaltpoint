<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\TaskGroup;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $groups = TaskGroup::all();

        foreach ($groups as $group) {
            for ($i = 1; $i <= 3; $i++) {
                Task::create([
                    'task_group_id' => $group->id,
                    'description' => "Задача $i для группы {$group->name}",
                ]);
            }
        }
    }
}

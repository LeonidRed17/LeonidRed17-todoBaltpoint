<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaskGroup;

class TaskGroupSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            ['name' => 'Работа', 'description' => 'Задачи связанные с работой'],
            ['name' => 'Дом', 'description' => 'Домашние дела'],
            ['name' => 'Учёба', 'description' => 'Учебные задачи'],
        ];

        foreach ($groups as $group) {
            TaskGroup::create($group);
        }
    }
}

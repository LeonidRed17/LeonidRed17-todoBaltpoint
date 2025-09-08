<x-layout>
    <?php //dd($tasks) ?>
    <h2>Добавить задачу</h2>

    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf

        <div class="group_name">
            <label for="group_name" class="form-label">Название группы:</label>
            <input type="text" id="group_name" name="group_name" class="form-control" required>
            <label for="groups_names" class="form-label">Готовые группы: </label>
            <select name="groups_names" id="groups_name">
                @foreach($tasks as $task)
                <option value="">{{$task->group->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="group_description">
            <label for="task_title" class="form-label">Описание группы:</label>
            <input type="text" id="task_title" name="group_title" class="form-control" required>
        </div>

        <div class="task">
            <label for="task_description" class="form-label">Задача:</label>
            <textarea id="task_description" name="task_description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    <hr>
    <h2>Список задач по группам</h2>
    @foreach($tasks as $task)
        <div class="card">
            <div class="card-header">
                <strong>{{$task->group->name}}</strong>
                <br>
                <small>{{$task->group->description}}</small>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <small>{{ $task->description }}</small>
                </li>
            </ul>
        </div>
        @endforeach
        </body>
        </html>

</x-layout>

<x-layout>
    <?php //dd($taskGroups)?>
    <h2 class="center">Добавить новую задачу</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="group_content center">
            <div class="groups_names_select">
                <label for="groups_name" class="form-label">Выбрать готовую группу задач:</label>
                <br>
                <select name="groups_names_select" id="groups_name">
                    <option value=default>Не выбрано</option>
                    @foreach($taskGroups as $group)
                        <option value={{$group->id}}>{{$group->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="group_name_block">
                <label for="group_name" class="form-label">Новая группа задач:</label>
                <br>
                <input type="text" id="group_name" name="group_name" class="form-control" required placeholder="Работа">
            </div>
            <div class="group_description_block">
                <label for="group_description" class="form-label">Описание для новой группы задач:</label>
                <br>
                <input type="text" id="group_description" name="group_description" class="form-control" required
                       placeholder="Мои задачи по работе">
            </div>
            <div class="task_name_block">
                <label for="task_description" class="form-label">Задача:</label>
                <br>
                <input type="text" id="task_description" name="task_description" class="form-control" required
                       placeholder="Сделать..."></input>
            </div>
            <div class="buttons_block">
                <button type="submit" class="btn submit_button">Добавить</button>
                <button type="button" class="btn reset_button">Сбросить</button>
            </div>
        </div>

    </form>
    <h2>Мои задачи</h2>
    <div class="tasks_list_block">
        @foreach($taskGroups as $group)
            <div>
                <strong>{{ $group->name }}</strong>
                <br>
                <small>{{ $group->description }}</small>
            </div>
            <ul class="tasks_list_block_ul">
                @foreach($group->tasks as $task)
                    <li class="tasks_list_block_ul_li">
                        <small>{{ $task->description }}</small>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
    {{--
        <div class="tasks_list_block">
            @foreach($tasks as $task)
            <div>
                <strong>{{$task->group->name}}</strong>
                <br>
                <small>{{$task->group->description}}</small>
            </div>
            <ul class="tasks_list_block_ul">
                <li class="tasks_list_block_ul_li">
                    <small>{{ $task->description }}</small>
                </li>
            </ul>
            @endforeach--}}

    </div>
    </body>

    </html>

</x-layout>
@vite('resources/css/tasks.css')
@vite('resources/js/script.js')

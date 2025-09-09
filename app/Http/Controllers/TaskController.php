<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;
//use App\Repositories\TaskRepository;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(protected TaskService $taskService){}
    public function index()
    {
        return view('tasks', ['taskGroups' => $this->taskService->getAllTasks()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->taskService->storeTask($request);

        return redirect('/');

    }

}

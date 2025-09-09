<?php

namespace App\Services;

use App\Repositories\TaskRepository;

class TaskService
{
    public function __construct(protected TaskRepository $repo)
    {
    }
    public function getAllTasks(){
        return $this->repo->getAll();
    }
    public function storeTask($data){
        return $this->repo->store($data);
    }

}

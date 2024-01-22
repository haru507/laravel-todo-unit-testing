<?php

namespace App\Repository;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Eloquent\EloquentTodo;
use App\Repository\Interface\TodoInterfaceRepository;

class TodoRepository implements TodoInterfaceRepository
{
    /**
     * @param TodoCreateRequest $todo
     * @return EloquentTodo
     */
    public function create(TodoCreateRequest $todo): EloquentTodo
    {
        $eloquentTodo = new EloquentTodo();
        $eloquentTodo->title = $todo->title;
        $eloquentTodo->isCompleted = $todo->isCompleted ?? false;
        $eloquentTodo->save();

        return $eloquentTodo;
    }
}

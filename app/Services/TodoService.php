<?php

namespace App\Services;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use App\Repository\Interface\TodoInterfaceRepository;
use App\Repository\TodoRepository;
use App\Services\Interface\TodoInterfaceService;

/**
 * Todoサービスクラス
 */
class TodoService implements TodoInterfaceService
{
    /**
     * @var TodoInterfaceRepository todoRepository
     */
    private TodoInterfaceRepository $todoRepository;

    /**
     * @param TodoRepository $todoRepository
     */
    public function __construct(
        TodoRepository $todoRepository
    )
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * @param TodoCreateRequest $request
     * @return Todo
     */public function create(TodoCreateRequest $request): Todo
    {
        $eloquentTodo = $this->todoRepository->create($request);

        return new Todo(
            id: $eloquentTodo->id,
            title: $eloquentTodo->title,
            isCompleted: $eloquentTodo->isCompleted
        );
    }
}

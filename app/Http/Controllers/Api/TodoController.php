<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoCreateRequest;
use App\Services\Interface\TodoInterfaceService;
use App\Services\TodoService;
use Illuminate\Http\JsonResponse;

/**
 * Todoコントローラークラス
 */
class TodoController extends Controller
{
    /**
     * @var TodoInterfaceService
     */
    private TodoInterfaceService $todoService;

    /**
     * @param TodoService $todoService
     */
    public function __construct(
        TodoService $todoService
    ) {
        $this->todoService = $todoService;
    }

    /**
     * タスクを登録する
     *
     * @param TodoCreateRequest $request
     * @return JsonResponse
     */
    public function create(TodoCreateRequest $request): JsonResponse
    {
        $todo = $this->todoService->create($request);
        return response()->json([
            'id' => $todo->getId(),
            'title' => $todo->getTitle(),
            'isCompleted' => $todo->getIsCompleted()
        ]);
    }
}

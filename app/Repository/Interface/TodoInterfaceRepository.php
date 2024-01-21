<?php

namespace App\Repository\Interface;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Eloquent\EloquentTodo;

interface TodoInterfaceRepository
{
    public function create(TodoCreateRequest $todo): EloquentTodo;
}

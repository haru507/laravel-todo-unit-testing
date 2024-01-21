<?php

namespace App\Services\Interface;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;

interface TodoInterfaceService
{
    public function create(TodoCreateRequest $request): Todo;
}

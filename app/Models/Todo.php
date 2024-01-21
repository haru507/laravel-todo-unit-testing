<?php

namespace App\Models;

/**
 * Todoモデル
 */
readonly class Todo
{
    /**
     * @param int $id
     * @param string $title
     * @param boolean $isCompleted
     */
    public function __construct(
        protected int    $id,
        protected string $title,
        protected bool   $isCompleted
    ) { }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function getIsCompleted(): bool
    {
        return $this->isCompleted;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}

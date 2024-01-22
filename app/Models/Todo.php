<?php

namespace App\Models;

/**
 * Todoモデル
 */
readonly class Todo implements ResponseInterface
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

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'isCompleted' => $this->getIsCompleted(),
        ];
    }
}

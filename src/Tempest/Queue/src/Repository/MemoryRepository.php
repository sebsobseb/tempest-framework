<?php

namespace Tempest\Queue\Repository;

use Tempest\Queue\Task;
use Tempest\Queue\TaskRepository;
use Tempest\Support\ArrayHelper;

final class MemoryRepository implements TaskRepository
{
    public function __construct(
        private ArrayHelper $tasks = new ArrayHelper()
    ) {}

    public function store(Task $task): void
    {
        $this->tasks[] = $task;
    }

    public function next(): ?Task
    {
        $this->tasks->unshift($task);

        return $task;
    }
}
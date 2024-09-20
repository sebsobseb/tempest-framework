<?php

namespace Tempest\Queue;

interface TaskRepository
{
    public function store(Task $task): void;

    public function next(): ?Task;
}
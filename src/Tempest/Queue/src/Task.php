<?php

namespace Tempest\Queue;

use DateTimeImmutable;

final readonly class Task
{
    public function __construct(
        public object $command,
        public DateTimeImmutable $createdAt,
        public DateTimeImmutable $updatedAt,
        public TaskStatus $status,
        public int $attempts = 0,
    ) {}
}
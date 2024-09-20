<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Tests\Fixtures;

use Queue;

#[Queue]
final readonly class QueuedCommand
{
    public function __construct(
        public string $name,
    ) {
    }
}

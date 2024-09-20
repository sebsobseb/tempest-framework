<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Tests\Fixtures;

use Tempest\CommandBus\Queue;

#[Queue]
final readonly class QueuedCommand
{
    public function __construct(
        public string $name,
    ) {
    }
}

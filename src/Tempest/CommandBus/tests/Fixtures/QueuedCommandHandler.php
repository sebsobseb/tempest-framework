<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Tests\Fixtures;

use Tempest\CommandBus\CommandHandler;

final readonly class QueuedCommandHandler
{
    #[CommandHandler]
    public function __invoke(QueuedCommand $command): void
    {
        ld('handled');
    }
}

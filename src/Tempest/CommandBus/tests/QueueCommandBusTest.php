<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Tests;

use function Tempest\command;
use Tempest\CommandBus\Tests\Fixtures\QueuedCommand;

/**
 * @internal
 */
final class QueueCommandBusTest extends CommandBusTestCase
{
    public function test_queued_command(): void
    {
        command(new QueuedCommand('test'));
    }
}

<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Tests;

use Tempest\CommandBus\CommandHandlerNotFound;
use Tempest\CommandBus\Tests\Fixtures\CreateUserCommand;
use Tempest\CommandBus\Tests\Fixtures\DeleteUserCommand;

/**
 * @internal
 */
final class GenericCommandBusTest extends CommandBusTestCase
{
    public function test_getting_command_handler_that_exists(): void
    {
        $command = new CreateUserCommand('Jim', 'Halpert');

        $this->commandBus->dispatch($command);

        $this->assertCount(1, $this->commandBus->getHistory());
        $this->assertSame($command, $this->commandBus->getHistory()[0]);
    }

    public function test_exception_is_thrown_when_command_handler_doesnt_exist(): void
    {
        $command = new DeleteUserCommand(12);

        $this->expectExceptionObject(
            new CommandHandlerNotFound($command)
        );

        $this->commandBus->dispatch($command);
    }
}

<?php

declare(strict_types=1);

namespace Tempest\Queue;

use Tempest\CommandBus\CommandBusMiddleware;
use Tempest\Reflection\ClassReflector;

final readonly class QueueCommandMiddleware implements CommandBusMiddleware
{
    public function __invoke(object $command, callable $next): void
    {
        $class = new ClassReflector($command);

        if ($class->hasAttribute(Queue::class)) {
            // TODO: actually store the command
            ld('hi');

            return;
        }

        $next($command);
    }
}

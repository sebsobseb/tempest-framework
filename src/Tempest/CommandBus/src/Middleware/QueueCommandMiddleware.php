<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Middleware;

use Tempest\CommandBus\CommandBusMiddleware;
use Tempest\CommandBus\Queue;
use Tempest\Reflection\ClassReflector;

final readonly class QueueCommandMiddleware implements CommandBusMiddleware
{
    public function __invoke(object $command, callable $next): void
    {
        $class = new ClassReflector($command);

        if ($class->hasAttribute(Queue::class)) {
            // TODO: queue command

            return;
        }

        $next($command);
    }
}

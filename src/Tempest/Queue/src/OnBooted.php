<?php

namespace Tempest\Queue;

use Tempest\CommandBus\CommandBusConfig;
use Tempest\Core\KernelEvent;
use Tempest\EventBus\EventHandler;

final readonly class OnBooted
{
    public function __construct(private CommandBusConfig $config) {}

    #[EventHandler(KernelEvent::BOOTED)]
    public function __invoke(): void
    {
        $this->config->addMiddleware(QueueCommandMiddleware::class);
    }
}
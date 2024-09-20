<?php

declare(strict_types=1);

namespace Tempest\CommandBus;

use Tempest\CommandBus\Middleware\QueueCommandMiddleware;
use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;

final readonly class CommandBusInitializer implements Initializer
{
    #[Singleton]
    public function initialize(Container $container): CommandBus
    {
        $config = $container->get(CommandBusConfig::class);

        $config->addMiddleware(QueueCommandMiddleware::class);

        return new GenericCommandBus($container, $config);
    }
}

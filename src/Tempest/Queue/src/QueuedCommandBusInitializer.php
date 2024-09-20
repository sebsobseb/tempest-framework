<?php

declare(strict_types=1);

namespace Tempest\Queue;

use Tempest\CommandBus\CommandBus;
use Tempest\CommandBus\CommandBusConfig;
use Tempest\CommandBus\GenericCommandBus;
use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;

final readonly class QueuedCommandBusInitializer implements Initializer
{
    #[Singleton(tag: 'queue')]
    public function initialize(Container $container): CommandBus
    {
        $config = $container->get(CommandBusConfig::class);

        // A command bus instance without the queue middleware
        return new GenericCommandBus($container, $config);
    }
}

<?php

declare(strict_types=1);

namespace Tempest\CommandBus;

use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;

final readonly class QueueCommandBusInitializer implements Initializer
{
    #[Singleton(tag: 'queue')]
    public function initialize(Container $container): CommandBus
    {
        $config = $container->get(CommandBusConfig::class);

        return new GenericCommandBus($container, $config);
    }
}

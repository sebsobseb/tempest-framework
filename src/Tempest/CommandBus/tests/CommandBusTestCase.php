<?php

declare(strict_types=1);

namespace Tempest\CommandBus\Tests;

use Monolog\Test\TestCase;
use Tempest\CommandBus\CommandBus;
use Tempest\Container\Container;
use Tempest\Core\DiscoveryLocation;
use Tempest\Core\Kernel;

/** @phpstan-ignore-next-line  */
abstract class CommandBusTestCase extends TestCase
{
    protected CommandBus $commandBus;

    protected Container $container;

    protected Kernel $kernel;

    protected function setUp(): void
    {
        parent::setUp();


        $this->kernel = new Kernel(
            root: getcwd(),
            discoveryLocations: [
                new DiscoveryLocation(namespace: '\Tempest\CommandBus\Tests\Fixtures', path: __DIR__ . '/Fixtures'),
            ],
            discoveryCache: true,
        );

        $this->container = $this->kernel->container;

        $this->commandBus = $this->container->get(CommandBus::class);
    }
}

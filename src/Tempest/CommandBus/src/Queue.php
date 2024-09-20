<?php

declare(strict_types=1);

namespace Tempest\CommandBus;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final readonly class Queue
{
}

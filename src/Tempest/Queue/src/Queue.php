<?php

declare(strict_types=1);

namespace Tempest\Queue;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final readonly class Queue
{
}

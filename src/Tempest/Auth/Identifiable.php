<?php

declare(strict_types=1);

namespace Auth;

interface Identifiable
{
    public function identifierField(): string;

    public function identifierValue(): int|string;
}

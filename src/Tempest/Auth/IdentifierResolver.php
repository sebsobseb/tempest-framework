<?php

declare(strict_types=1);

namespace Auth;

use Auth\Exceptions\InvalidLoginException;

interface IdentifierResolver
{
    /**
     * @throws InvalidLoginException
     */
    public function resolve(AuthenticationCall $call): Identifiable;

    public function getIdentifiable(): Identifiable|null;
}

<?php

declare(strict_types=1);

namespace Auth;

final readonly class DatabaseAuthenticationCall implements AuthenticationCall
{
    public function __construct(
        public string $identifier,
        public string $password,
    ) {
    }
}

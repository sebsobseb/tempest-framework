<?php

declare(strict_types=1);

namespace Auth;

interface Authenticator
{
    public function login(Identifiable $identifiable): void;

    public function logout(): void;

    public function getSessionInfo(): array|null;
}

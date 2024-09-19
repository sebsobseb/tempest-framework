<?php

declare(strict_types=1);

namespace Tempest\Http;

use Tempest\Http\Cookie\Cookie;

interface Request
{
    public Method $method { get; }

    public string $uri { get; }

    public array $body { get; }

    public array $headers { get; }

    public string $path { get; }

    public array $query { get; }

    /** @var \Tempest\Http\Upload[] $files */
    public array $files { get; }

    /** @var Cookie[] */
    public array $cookies { get; }

    public function get(string $key, mixed $default = null): mixed;

    public function getSessionValue(string $name): mixed;

    public function getCookie(string $name): ?Cookie;

    public function validate(): void;
}

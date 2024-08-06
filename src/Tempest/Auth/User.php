<?php

namespace Tempest\Auth;

use SensitiveParameter;
use Tempest\Database\IsModel;
use Tempest\Database\Model;

final class User implements Model
{
    use IsModel;

    public function __construct(
        public string $name,
        public string $email,
        #[SensitiveParameter]
        public string $password,
    ) {}
}
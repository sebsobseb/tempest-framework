<?php

declare(strict_types=1);

namespace App\Modules\Auth\Models;

use Auth\HasIdentity;
use Auth\Identifiable;
use SensitiveParameter;
use Tempest\Database\IsModel;
use Tempest\Database\Model;

final class User implements Identifiable, Model
{
    use HasIdentity;
    use IsModel;

    public function __construct(
        #[SensitiveParameter]
        public string $name,
        #[SensitiveParameter]
        public string $email = '',
        #[SensitiveParameter]
        public string $password = '',
    ) {
    }
}

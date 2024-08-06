<?php

declare(strict_types=1);

use App\Modules\Auth\Models\User;
use Auth\AuthConfig;

return new AuthConfig(
    identifiable: User::class,
);

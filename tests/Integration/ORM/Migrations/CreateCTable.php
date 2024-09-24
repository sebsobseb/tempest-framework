<?php

declare(strict_types=1);

namespace Tests\Tempest\Integration\ORM\Migrations;

use Tempest\Database\Migration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;
use Tempest\Database\QueryStatements\PrimaryKeyStatement;
use Tempest\Database\QueryStatements\TextStatement;

final readonly class CreateCTable implements Migration
{
    public function getName(): string
    {
        return '100-create-c';
    }

    public function up(): QueryStatement|null
    {
        return new CreateTableStatement('c', [
            new PrimaryKeyStatement(),
            new TextStatement('name'),
        ]);
    }

    public function down(): QueryStatement|null
    {
        return new DropTableStatement('c');
    }
}

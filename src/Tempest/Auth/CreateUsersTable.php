<?php

namespace Tempest\Auth;

use Tempest\Database\Migration;
use Tempest\Database\Query;

final readonly class CreateUsersTable implements Migration
{
    public function getName(): string
    {
        return '0000-00-00_create_users_table';
    }

    public function up(): Query|null
    {
        return new Query(<<<SQL
        CREATE TABLE User (
            `id` INTEGER PRIMARY KEY AUTOINCREMENT,
            `name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            `emailValidatedAt` DATETIME DEFAULT NULL,
            `password` VARCHAR(255) NOT NULL
        );
        SQL);
    }

    public function down(): Query|null
    {
        return new Query(<<<SQL
        DROP TABLE IF EXISTS User;
        SQL);
    }
}
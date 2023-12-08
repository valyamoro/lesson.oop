<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Database;

interface QueryBuilder
{
    public function prepare(string $query): QueryBuilder;

    public function execute(array $binds = []): QueryBuilder;

    public function fetch(): ?array;

    public function fetchAll(): ?array;

    public function lastInsertId(): int;
}

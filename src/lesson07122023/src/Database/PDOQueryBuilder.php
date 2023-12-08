<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Database;

class PDOQueryBuilder implements QueryBuilder
{
    private ?\PDOStatement $sth;

    public function __construct(
        private \PDO $dbh,
    ) {
    }

    public function prepare(string $query): PDOQueryBuilder
    {
        $this->sth = $this->dbh->prepare($query);

        return $this;
    }

    public function execute(array $binds = []): PDOQueryBuilder
    {
        $this->sth->execute($binds);

        return $this;
    }

    public function fetch(): ?array
    {
        $result = $this->sth->fetch();
        $this->sth = null;

        return $result ?? null;
    }

    public function fetchAll(): ?array
    {
        $result = $this->sth->fetchAll();
        $this->sth = null;

        return $result ?? null;
    }

    public function lastInsertId(): int
    {
        return (int)$this->dbh->lastInsertId();
    }

}

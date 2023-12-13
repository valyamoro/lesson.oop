<?php
declare(strict_types=1);

namespace App\lesson09122023\Database;

class DatabaseMySQLIConnection implements DatabaseConnection
{
    public function __construct(
        private DatabaseConfiguration $configuration,
    ) {}

    public function connection(): \mysqli
    {
        return new \mysqli(
            $this->configuration->getHost(),
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getDbName(),
        );
    }

}

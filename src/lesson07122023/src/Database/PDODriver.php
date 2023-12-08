<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Database;

class PDODriver implements Database
{
    public function __construct(
        private string $host,
        private string $dbname,
        private string $username,
        private string $password,
        private string $charset,
        private array $options,
    ) {}

    public function getConnection(): object
    {
        return $this->init();
    }

    public function init(): \PDO
    {
        return new \PDO(
            $this->getDSN(),
            $this->username,
            $this->password,
            $this->options,
        );
    }

    private function getDSN(): string
    {
        return \sprintf(
            'mysql:host=%s;dbname=%s;charset=%s',
            $this->host,
            $this->dbname,
            $this->charset,
        );
    }

}

<?php

namespace App\lesson09122023\Database;

use mysql_xdevapi\CrudOperationBindable;

class MySQLIDriver
{
    public function __construct(
        private \mysqli $dbh,
    ) {}

    public function query(string $query): \mysqli_result
    {
        return $this->dbh->query($query);
    }

}
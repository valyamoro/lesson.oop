<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Database;

interface Database
{
    public function getConnection(): object;
}

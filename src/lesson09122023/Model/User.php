<?php
declare(strict_types=1);

namespace App\lesson09122023\Model;

class User extends Model
{
    const TABLE_NAME = 'users';

    public function getUser()
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME;

        $result = $this->builder->query($query);

        while ($row[] = $result->fetch_assoc()) {
        }

        return $row;
    }

}

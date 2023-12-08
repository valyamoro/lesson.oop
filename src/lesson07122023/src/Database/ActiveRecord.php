<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Database;

abstract class ActiveRecord
{
    protected const TABLE_NAME = '';
    protected static PDOQueryBuilder $queryBuilder;
    private static PDOQueryBuilder $staticBuilder;

    public function queryBuilder(): PDOQueryBuilder
    {
        return self::$staticBuilder;
    }

    protected static function init(): void
    {
        $data = require __DIR__ . '/../../config/db.php';

        $database = new PDODriver(...$data['pdo']);

        $queryBuilder = new PDOQueryBuilder($database->init());
        self::$queryBuilder = $queryBuilder;
        static::$staticBuilder = $queryBuilder;
    }

    public static function find(int $id): ?array
    {
        $query = 'SELECT * FROM ' . static::TABLE_NAME . ' where id=? limit 1';
        $result = static::$staticBuilder->prepare($query)->execute([$id])->fetch();
        return $result;
    }

}

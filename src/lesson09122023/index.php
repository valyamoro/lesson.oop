<?php
declare(strict_types=1);

use App\lesson09122023\Database\DatabaseConfiguration;
use App\lesson09122023\Database\DatabaseMySQLIConnection;
use App\lesson09122023\Database\DatabasePDOConnection;
use App\lesson09122023\Database\MySQLIDriver;
use App\lesson09122023\Database\PDODriver;
use App\lesson09122023\Model\User;

require_once __DIR__ . '/../../vendor/autoload.php';

$data = require __DIR__ . '/config/db.php';
$databaseConfiguration = new DatabaseConfiguration(...$data['pdo']);
$databasePDOConnection = new DatabasePDOConnection($databaseConfiguration);
$databaseMYSQLIConnection = new DatabaseMySQLIConnection($databaseConfiguration);
$pdoDriver = new PDODriver($databasePDOConnection->connection());
$mysqliDriver = new MySQLIDriver($databaseMYSQLIConnection->connection());

$model = User::create(null, $mysqliDriver);

$data = [
    'name' => '1',
    'email' => 'Ivan2@mail.ru',
    'phone' => '72900809080',
    'password'  =>'12345j',
];

$result = $model->getUser();
print_r($result);































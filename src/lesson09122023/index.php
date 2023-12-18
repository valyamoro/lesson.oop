<?php
declare(strict_types=1);

use App\lesson09122023\Database\DatabaseConfiguration;
use App\lesson09122023\Database\DatabasePDOConnection;
use App\lesson09122023\Database\PDODriver;
use App\lesson09122023\Model\User;

require_once __DIR__ . '/../../vendor/autoload.php';

$data = require __DIR__ . '/config/db.php';
$databaseConfiguration = new DatabaseConfiguration(...$data['pdo']);
$databasePDOConnection = new DatabasePDOConnection($databaseConfiguration);
$pdoDriver = new PDODriver($databasePDOConnection->connection());

$model = User::create($pdoDriver);

$data = [
    'name' => '1',
    'email' => 'Ivan2www@mail.ru',
    'phone' => '11172900809080',
    'password'  =>'aaw12345qqwj',
];
$id = 93;

$result = $model->update($data, $id);
//$result = $model->getAll();
print_r($result);































<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\lesson07122023\src\Models\Product;

$id = 5;

$model = Product::create();
print_r($model->add('p4', 30, 350, 300));
print_r($model->find(4));

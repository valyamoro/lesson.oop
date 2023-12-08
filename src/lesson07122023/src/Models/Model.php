<?php
declare(strict_types=1);

namespace App\lesson07122023\src\Models;

use App\lesson07122023\src\Database\ActiveRecord;

abstract class Model extends ActiveRecord
{
    public function __construct()
    {
        self::init();
    }

    public static function create(): Model
    {
        self::init();

        return new static();
    }

}

<?php
declare(strict_types=1);

namespace App\lesson28112023\V1;

class Manager extends Person
{
    private int $number;
    public function __construct(
        string $name,
        string $surname,
        string $patronymic,
    ) {
        parent::__construct($name, $surname, $patronymic);
    }

}

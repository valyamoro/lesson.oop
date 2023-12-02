<?php
declare(strict_types=1);

namespace App\lesson28112023\V1;

abstract class Person
{
    private int $id;
    public function __construct(
        private string $name,
        private string $surname,
        private string $patronymic,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $value): void
    {
        $this->id = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

}

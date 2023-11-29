<?php

namespace App\lesson27112023\V3;

class Person
{
    private int $number;
    public function __construct(
        private string $name,
        private string $surname,
        private string $patronymic,
    ) {
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $value): void
    {
        $this->number = $value;
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

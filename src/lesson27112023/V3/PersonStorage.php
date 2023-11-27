<?php
declare(strict_types=1);

namespace App\lesson27112023\V3;

class PersonStorage
{
    public function __construct(
        private int $number,
        private string $name,
        private string $surname,
        private string $patronymic,
        private string $filename,
    ) {
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

    public function getFileName(): string
    {
        return $this->filename;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getString(): string
    {
        return "{$this->getNumber()}|{$this->getName()}|{$this->getSurname()}|{$this->getPatronymic()}";
    }

}

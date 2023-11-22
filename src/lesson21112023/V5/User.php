<?php
declare(strict_types=1);

namespace App\lesson21112023\V5;

abstract class User
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private string $birthDay,
        private string $email,
        private string $address,
        private bool $isBanned,
    ) {}

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getBirthDay(): string
    {
        return $this->birthDay;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getIsBanned(): bool
    {
        return $this->isBanned;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

}

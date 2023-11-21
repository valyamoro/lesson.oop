<?php
declare(strict_types=1);

namespace App\lesson21112023\V5;

class Admin extends User
{
    public function __construct(
        string $firstName,
        string $lastName,
        string $birthDay,
        string $email,
        int $isBanned,
        private int $role,
        private string $address,
    ) {
        parent::__construct($firstName, $lastName, $birthDay, $email, $isBanned);
    }

    public function getRole(): int
    {
        return $this->role;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

}

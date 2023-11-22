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
        string $address,
        bool $isBanned,
        private int $role,
    ) {
        parent::__construct($firstName, $lastName, $birthDay, $email, $address, $isBanned);
    }

    public function getRole(): int
    {
        return $this->role;
    }

}

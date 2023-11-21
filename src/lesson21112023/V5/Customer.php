<?php
declare(strict_types=1);

namespace App\lesson21112023\V5;

class Customer extends User
{
    public function __construct(
        string $firstName,
        string $lastName,
        string $birthDay,
        string $email,
        int $isBanned,
        private int $status,
    ) {
        parent::__construct($firstName, $lastName, $birthDay, $email, $isBanned);
    }

    public function getStatus(): int
    {
        return $this->status;
    }

}

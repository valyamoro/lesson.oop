<?php
declare(strict_types=1);

namespace App\lesson21112023\V5;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testCreateAdmin(): void
    {
        $data = [
            'firstName' => 'kutlumbek',
            'lastName' => 'Adminov',
            'birthDay' => '01-09-2006',
            'email' => 'kutlumbek@gmail.com',
            'isBanned' => '0',
            'role' => '1',
            'address' => 'planeta zemlya'
        ];
        $user = new Admin($data['firstName'], $data['lastName'], $data['birthDay'], $data['email'], (int)$data['isBanned'], (int)$data['role'], $data['address']);

        $this->assertSame('kutlumbek', $user->getFirstName());
        $this->assertSame('Adminov', $user->getLastName());
        $this->assertSame('01-09-2006', $user->getBirthDay());
        $this->assertSame('kutlumbek@gmail.com', $user->getEmail());
        $this->assertSame(1, $user->getRole());
        $this->assertSame(0, $user->getIsBanned());
        $this->assertSame('planeta zemlya', $user->getAddress());
    }

    public function testCreateCustomer(): void
    {
        $data = [
            'firstName' => 'kutlumbek',
            'lastName' => 'Customerov',
            'birthDay' => '01-09-2006',
            'email' => 'kutlumbek@gmail.com',
            'isBanned' => '0',
            'status' => '1',
        ];
        $user = new Customer($data['firstName'], $data['lastName'], $data['birthDay'], $data['email'], (int)$data['isBanned'], (int)$data['status']);

        $this->assertSame('kutlumbek', $user->getFirstName());
        $this->assertSame('Customerov', $user->getLastName());
        $this->assertSame('01-09-2006', $user->getBirthDay());
        $this->assertSame('kutlumbek@gmail.com', $user->getEmail());
        $this->assertSame(0, $user->getIsBanned());
        $this->assertSame(1, $user->getStatus());
    }

}

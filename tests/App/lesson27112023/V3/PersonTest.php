<?php
declare(strict_types=1);

namespace App\lesson27112023\V3;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testCanCreatePerson(): void
    {
        $name = 'Ivan';
        $surname = 'Popova';
        $patronymic = 'Ivanovich';
        $filename = __DIR__ . '/../../../../files/users.txt';

        $person = new Person($name, $surname, $patronymic);
        $storage = new FileStorage($person, $filename);

        $result = $storage->readPerson();

        $this->assertInstanceOf(Person::class, $result);
        $this->assertSame(5, $result->getNumber());
    }

}

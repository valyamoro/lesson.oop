<?php
declare(strict_types=1);

namespace App\lesson27112023\V2;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testCanCreatePerson(): void
    {
        $name = 'Ivan2';
        $surname = 'Popov';
        $patronymic = 'Popovich';
        $filename = __DIR__ . '/../../../../files/users.txt';

        $person = new Person($name, $surname, $patronymic, $filename);

        $this->assertSame('Ivan2', $person->name);
        $this->assertSame('Popov', $person->surname);
        $this->assertSame('Popovich', $person->patronymic);
    }

}
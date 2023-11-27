<?php
declare(strict_types=1);

namespace App\lesson27112023\V3;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testCanCreatePerson(): void
    {
        $name = 'Ivяццan';
        $surname = 'Vaovan';
        $patronymic = 'Popovicewwh';
        $filename = __DIR__ . '/../../../../files/users.txt';

        $createPerson = new CreatePerson($name, $surname, $patronymic, $filename);
        $person = new PersonStorage($createPerson->getNumber(), $name, $surname, $patronymic, $filename);

        $this->assertFileExists($filename);
        $this->assertEquals($person->getString(), \trim($createPerson->getString()));
        $this->assertEquals('1', $person->getNumber());
    }

}

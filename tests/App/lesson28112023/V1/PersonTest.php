<?php
declare(strict_types=1);

namespace App\lesson28112023\V1;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testCreateSale(): void
    {
        $filename = __DIR__ . '/../../../../files/lesson28112023/sales.txt';

        $nameCustomer = 'Xanc';
        $surnameCustomer = 'Popodw';
        $patronymicCustomer = 'Iwdvanov';

        $nameManager = 'Daac';
        $surnameManager = 'Diwdmov';
        $patronymicManager = 'DimDimich';

        $customer = new Customer($nameCustomer, $surnameCustomer, $patronymicCustomer);
        $manager = new Manager($nameManager, $surnameManager, $patronymicManager);

        $sale = new Sale($manager, $customer, $filename);
        $result = $sale->readSale();

        $this->assertInstanceOf(Person::class, $result['manager']);
        $this->assertInstanceOf(Person::class, $result['customer']);

        $id = 14;
        // Правильный ли айди у менеджера и покупателя.
        $this->assertSame($id, $result['manager']->getNumber());
        $this->assertSame($id, $result['customer']->getNumber());

        // Нужный ли абстрактный класс реализуется.
        $this->assertInstanceOf(Person::class, $result['manager']);
        $this->assertInstanceOf(Person::class, $result['customer']);
    }

}

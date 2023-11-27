<?php
declare(strict_types=1);

namespace App\lesson27112023\V1;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function testCanCreateIterator(): void
    {
        // Arrange
        $iterator = new Number();
        $params = [1, 2, 3, 4, 5];

        $closure = function (int $value): int {
            return $value + 1;
        };

        // Act
        $result1 = $iterator->add($params);
        $result2 = $iterator->add($params, $closure);
        $result3 = $iterator->add($params, function ($value) {
            return $value + 2;
        });

        //Assert
        $this->assertSame(15, $result1);
        $this->assertSame(20, $result2);
        $this->assertSame(25, $result3);
    }

}
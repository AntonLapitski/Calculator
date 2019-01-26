<?php
declare(strict_types = 1);
namespace App\tests;

use App\src\CalculateSum;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculateSumTest
 * @package App\tests
 * @mixin TestCase
 */

class CalculateSumTest extends TestCase
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @dataProvider provider
     * @return void
     */
    public function testAdd($a, $b, $c): void
    {
        $calc = new CalculateSum($a, $b);
        $this->assertSame($c, $calc->calculate());
    }

    /**
     * @return array
     */
    public function provider(): array
    {
        return [
            [1, 1, 2.0],
            [-1, -1, -2.0],
            [null, null, 0.0],
            ['10', '10', 20.0],
            ['10', '10', 20.0],
            [1.1, 1.1, 2.2],
            ['1.1', '1.1', 2.2],
        ];
    }
}

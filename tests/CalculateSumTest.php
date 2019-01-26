<?php
declare(strict_types=1);

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
     * @var CalculateSum
     */
    private $calculator;

    /**
     * CalculateSum initialization.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->calculator = new CalculateSum();
    }

    /**
     * Test adding numbers.
     *
     * @param float|null|int $a
     * @param float|null|int $b
     * @param float $c
     * @dataProvider provider
     * @return void
     */
    public function testAdd($a, $b, $c): void
    {
        $this->assertSame($c, $this->calculator->calculate($a, $b));
        $this->assertTrue(is_float($c));
        if (!is_null($a) && !is_null($b)) {
            $this->assertGreaterThan($a, abs($c));
            $this->assertGreaterThan($b, abs($c));
        }
    }

    /**
     * Provider filled with numbers.
     *
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

<?php
declare(strict_types=1);

namespace App\tests;

use App\src\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 * @package App\tests
 * @mixin TestCase
 */
class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * Calculator initialization.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * Test adding numbers.
     *
     * @param float|null|int $a
     * @param float|null|int $b
     * @param float $c
     * @dataProvider additionProvider
     * @return void
     */
    public function testAdd($a, $b, $c): void
    {
        $this->assertSame($c, $this->calculator->add($a, $b));
        $this->assertTrue(is_float($c));
        if (!is_null($a) && !is_null($b)) {
            $this->assertGreaterThan($a, abs($c));
            $this->assertGreaterThan($b, abs($c));
        }
    }

    /**
     * Test subtracting numbers.
     *
     * @param float|null|int $a
     * @param float|null|int $b
     * @param float $c
     * @dataProvider subtractionProvider
     * @return void
     */
    public function testSubtract($a, $b, $c): void
    {
        $this->assertSame($c, $this->calculator->subtract($a, $b));
        $this->assertTrue(is_float($c));
        if (!is_null($a) && !is_null($b)) {
            $this->assertGreaterThan(abs($c), abs($a) + abs($b));
        }
    }

    /**
     * Test multiplying numbers.
     *
     * @param float|null|int $a
     * @param float|null|int $b
     * @param float $c
     * @dataProvider multiplicationProvider
     * @return void
     */
    public function testMultiply($a, $b, $c): void
    {
        $this->assertSame($c, $this->calculator->multiply($a, $b));
        $this->assertTrue(is_float($c));
    }

    /**
     * Test dividing numbers.
     *
     * @param float|null|int $a
     * @param float|null|int $b
     * @param float $c
     * @dataProvider divisionProvider
     * @return void
     */
    public function testDivide($a, $b, $c): void
    {
        $this->assertSame($c, $this->calculator->divide($a, $b));
        $this->assertTrue(is_float($c));
        if (!is_null($a) && !is_null($b)) {
            $this->assertGreaterThan($c, abs($a + $b));
        }
    }

    /**
     * Provider for addition.
     *
     * @return array
     */
    public function additionProvider(): array
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

    /**
     * Provider for subtraction.
     *
     * @return array
     */
    public function subtractionProvider(): array
    {
        return [
            [1, 1, 0.0],
            [-1, -1, 0.0],
            [null, null, 0.0],
            ['10', '10', 0.0],
            ['10', '10', 0.0],
            [1.1, 1.1, 0.0],
            ['1.1', '1.1', 0.0],
        ];
    }

    /**
     * Provider for multiplication.
     *
     * @return array
     */
    public function multiplicationProvider(): array
    {
        return [
            [1, 1, 1.0],
            [-1, -1, 1.0],
            [null, null, 0.0],
            ['10', '10', 100.0],
            ['10', '10', 100.0],
            [1.1, 1.1, 1.21],
            ['1.1', '1.1', 1.21],
        ];
    }

    /**
     * Provider for division.
     *
     * @return array
     */
    public function divisionProvider(): array
    {
        return [
            [1, 1, 1.0],
            [-1, -1, 1.0],
            [1.1, 1.1, 1.0],
            ['10', '10', 1.0],
            ['10', '10', 1.0],
            [1.1, 1.1, 1.0],
            ['1.1', '1.1', 1.0],
        ];
    }
}

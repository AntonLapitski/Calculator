<?php
declare(strict_types=1);

namespace App\src;

/**
 * Class Calculator
 * @package App\src
 */
class Calculator implements CalculatorInterface
{
    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function add($a, $b): float
    {
        $value = (float)$a + (float)$b;

        return $value;
    }

    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function subtract($a, $b): float
    {
        $value = (float)$a - (float)$b;

        return $value;
    }

    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function multiply($a, $b): float
    {
        $value = (float)$a * (float)$b;

        return $value;
    }

    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function divide($a, $b): float
    {
        $value = (float)$a / (float)$b;

        return $value;
    }
}

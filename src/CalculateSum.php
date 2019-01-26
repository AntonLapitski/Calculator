<?php
declare(strict_types=1);

namespace App\src;

/**
 * Class CalculateSum
 * @package App\src
 */
class CalculateSum implements CalculatorInterface
{
    /**
     * CalculateSum constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param float|int|null $a
     * @param float|int|null $b
     * @return float
     */
    public function calculate($a, $b): float
    {
        $value = (float)$a + (float)$b;

        return $value;
    }
}

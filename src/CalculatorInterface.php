<?php
declare(strict_types=1);

namespace App\src;

/**
 * Interface CalculatorInterface
 * @package App\src
 */
interface CalculatorInterface
{
    /**
     * @param $a float|int|null
     * @param $b float|int|null
     * @return float
     */
    public function calculate($a, $b): float;
}

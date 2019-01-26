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
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function calculate($a, $b): float;
}

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
    public function add($a, $b): float;

    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function subtract($a, $b): float;

    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function multiply($a, $b): float;

    /**
     * @param float|null|int $a
     * @param float|null|int $b
     * @return float
     */
    public function divide($a, $b): float;
}

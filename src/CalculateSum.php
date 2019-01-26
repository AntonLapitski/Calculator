<?php
declare(strict_types = 1);
namespace App\src;

/**
 * Class CalculateSum
 * @package App\src
 */
class CalculateSum implements CalculatorInterface
{
    /**
     * @var float
     */
    private $a;
    /**
     * @var float
     */
    private $b;

    /**
     * CalculateSum constructor.
     * @param mixed $a
     * @param mixed $b
     */
    public function __construct($a, $b)
    {
        $this->a = (float)$a;
        $this->b = (float)$b;
    }

    /**
     * @return float
     */
    public function calculate(): float
    {
        $value = $this->a + $this->b;

        return $value;
    }
}

<?php
namespace Tests\Unit;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSubstraction()
    {
        $calculator = new Calculator();

        $this->assertEquals(7, $calculator->addition(3, 4));
    }
}
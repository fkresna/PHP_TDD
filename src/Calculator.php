<?php
namespace App;

require_once __DIR__ . '/../vendor/autoload.php';

class Calculator
{
    public function addition($firstNumber, $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}
<?php

use PHPUnit\Framework\TestCase;

require './src/Calc.php';

class CalcTest extends TestCase
{
    public function testCalcFactorialZero()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial(0);
        $this->assertEquals(1, $result);
    }

    public function testCalcFactorialOne()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial(1);
        $this->assertEquals(1, $result);
    }

    public function testCalcFactorialFive()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial(5);
        $this->assertEquals(120, $result);
    }

    public function testCalcFactorialRandomInt()
    {
        $factorial = new Calc();
        $randomInt = mt_rand(4, 100);
        $expectedResult = $factorial->calcFactorial($randomInt - 1) * $randomInt;
        $result = $factorial->calcFactorial($randomInt);
        $this->assertEquals($expectedResult, $result);
    }

    public function testCalcFactorialNegative()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial(-3);
        $this->assertNull($result);
    }

    public function testCalcFactorialFloat()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial(1.5);
        $this->assertNull($result);
    }

    public function testCalcFactorialFalse()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial(false);
        $this->assertNull($result);
    }

    public function testCalcFactorialString()
    {
        $factorial = new Calc();
        $result = $factorial->calcFactorial('abc');
        $this->assertNull($result);
    }
}

<?php
/**
 * overviwe.
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/11/1
 * Time: 23:11
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\BuyingCarCases;
use PHPUnit\Framework\TestCase;

class BuyingCarCasesTest extends TestCase
{

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {
        $buyingCarCasesOnject = new BuyingCarCases();

        $this->revTest($buyingCarCasesOnject->removeNb(100), []);
        $this->revTest($buyingCarCasesOnject->removeNb(101), [[55, 91], [91, 55]]);
        $this->revTest($buyingCarCasesOnject->removeNb(102), [[70, 73], [73, 70]]);
        $this->revTest($buyingCarCasesOnject->removeNb(102), [[70, 73], [73, 70]]);
        $this->revTest($buyingCarCasesOnject->removeNb(100090), [[63267, 79171], [79171, 63267]]);
        $this->revTest($buyingCarCasesOnject->removeNb(100090000), []);
    }
}
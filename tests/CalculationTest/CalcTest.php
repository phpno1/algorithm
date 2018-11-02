<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\Calc;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{

    public function testExamples()
    {

        $calcObject = new Calc();

        $this->assertEquals(0, $calcObject->calc(''), "Should work with empty string");
        $this->assertEquals(3, $calcObject->calc('3'), "Should parse numbers");
        $this->assertEquals(3.5, $calcObject->calc('3.5'), "Should parse float numbers");
        $this->assertEquals(4, $calcObject->calc('1 3 +'), "Should support addition");
        $this->assertEquals(3, $calcObject->calc('1 3 *'), "Should support multiplication");
        $this->assertEquals(-2, $calcObject->calc('1 3 -'), "Should support subtraction");
        $this->assertEquals(2, $calcObject->calc('4 2 /'), "Should support division");
    }
}
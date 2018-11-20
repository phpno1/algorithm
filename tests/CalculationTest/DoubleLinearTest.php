<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\DoubleLinear;
use PHPUnit\Framework\TestCase;

class DoubleLinearTest extends TestCase
{
    private $doubleLinearObject;

    public function setUp()
    {
        parent::setUp();
        $this->doubleLinearObject = new DoubleLinear();
    }

    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest($this->doubleLinearObject->dblLinear(10), 22);
        $this->revTest($this->doubleLinearObject->dblLinear(20), 57);
        $this->revTest($this->doubleLinearObject->dblLinear(30), 91);
        $this->revTest($this->doubleLinearObject->dblLinear(50), 175);
        $this->revTest($this->doubleLinearObject->dblLinear(100), 447);
    }
}
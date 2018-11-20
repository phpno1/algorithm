<?php
/**
 * @package    Phpno1\Algorithm\ArrayPluck
 * @author     ice <354037968@@qq.com>
 * @link       https://github.com/yb19890724
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\DoubleLinear;
use PHPUnit\Framework\TestCase;

/**
 * Class DoubleLinearTest
 *
 * @package       Phpno1\Test\CalculationTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class DoubleLinearTest extends TestCase
{

    /**
     * @var object Phpno1\Algorithm\Calculation\DoubleLinear
     */
    private $doubleLinearObject;

    /**
     * 初始化object
     */
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
        $this->revTest($this->doubleLinearObject->dblLinear(1000000), 54381286);
    }
}
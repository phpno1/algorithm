<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\Calc;
use PHPUnit\Framework\TestCase;

/**
 * Class CalcTest
 *
 * @package       Phpno1\Test\CalculationTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class CalcTest extends TestCase
{

    /**
     * @var object $calcObject Phpno1\Algorithm\Calculation\Calc
     */
    private $calcObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();
        $this->calcObject = new Calc();
    }

    /**
     * 单元测试case
     */
    public function testExamples()
    {
        $this->assertEquals(0, $this->calcObject->calc(''), "Should work with empty string");
        $this->assertEquals(3, $this->calcObject->calc('3'), "Should parse numbers");
        $this->assertEquals(3.5, $this->calcObject->calc('3.5'), "Should parse float numbers");
        $this->assertEquals(4, $this->calcObject->calc('1 3 +'), "Should support addition");
        $this->assertEquals(3, $this->calcObject->calc('1 3 *'), "Should support multiplication");
        $this->assertEquals(-2, $this->calcObject->calc('1 3 -'), "Should support subtraction");
        $this->assertEquals(2, $this->calcObject->calc('4 2 /'), "Should support division");
    }
}
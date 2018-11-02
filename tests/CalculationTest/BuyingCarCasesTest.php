<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\BuyingCarCases;
use PHPUnit\Framework\TestCase;

/**
 * Class BuyingCarCasesTest
 *
 * @package       Phpno1\Test\CalculationTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class BuyingCarCasesTest extends TestCase
{

    /**
     * @var object $buyingCarCasesObject Phpno1\Algorithm\Calculation\BuyingCarCases
     */
    private $buyingCarCasesObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->buyingCarCasesObject = new BuyingCarCases();
    }

    /**
     * @param integer $actual
     * @param array $expected
     */
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    /**
     * 测试数据
     */
    public function testBasics()
    {
        $this->revTest($this->buyingCarCasesObject->removeNb(100), []);
        $this->revTest($this->buyingCarCasesObject->removeNb(101), [[55, 91], [91, 55]]);
        $this->revTest($this->buyingCarCasesObject->removeNb(102), [[70, 73], [73, 70]]);
        $this->revTest($this->buyingCarCasesObject->removeNb(102), [[70, 73], [73, 70]]);
        $this->revTest($this->buyingCarCasesObject->removeNb(100090), [[63267, 79171], [79171, 63267]]);
        $this->revTest($this->buyingCarCasesObject->removeNb(100090000), []);
    }
}
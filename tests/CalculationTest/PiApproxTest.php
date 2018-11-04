<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\PiApprox;
use PHPUnit\Framework\TestCase;

/**
 * Class PiApproxTest
 *
 * @package       Phpno1\Test\CalculationTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class PiApproxTest extends TestCase
{

    /**
     * @var object $piApproxObject Phpno1\Algorithm\Calculation\PiApprox;
     */
    private $piApproxObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->piApproxObject = new PiApprox();
    }

    /**
     * @param float $actual
     * @param array $expected
     */
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    /**
     * 单元测试case
     */
    public function testBasics()
    {
        $this->revTest($this->piApproxObject->iterPi(0.1), [10, 3.0418396189]);
        $this->revTest($this->piApproxObject->iterPi(0.01), [100, 3.1315929036]);
        $this->revTest($this->piApproxObject->iterPi(0.001), [1000, 3.1405926538]);
    }
}
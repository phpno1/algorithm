<?php
/**
 * @package   Phpno1\Test\JudgeTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\BackwardsPrime;
use PHPUnit\Framework\TestCase;

/**
 * Class BackwardsPrimeTest
 *
 * @package       Phpno1\Test\JudgeTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class BackwardsPrimeTest extends TestCase
{

    /**
     * @var object $backwardsPrimeObject Phpno1\Algorithm\Judge\BackwardsPrime
     */
    private $backwardsPrimeObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->backwardsPrimeObject = new BackwardsPrime();
    }

    /**
     * @param integer $actual
     * @param array   $expected
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
        $a = [7027, 7043, 7057];
        $this->revTest($this->backwardsPrimeObject->backwardsPrime(7000, 7100), $a);
        $a = [70001, 70009, 70061, 70079, 70121, 70141, 70163, 70241];
        $this->revTest($this->backwardsPrimeObject->backwardsPrime(70000, 70245), $a);
        $a = [70489, 70529, 70573, 70589];
        $this->revTest($this->backwardsPrimeObject->backwardsPrime(70485, 70600), $a);
    }
}
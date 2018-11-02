<?php
/**
 * @package   Phpno1\Test\FilterTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\FilterTest;

use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\Filter\OddOrEven;

/**
 * Class OddOrEverTest
 *
 * @package       Phpno1\Test\FilterTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class OddOrEverTest extends TestCase
{

    /**
     * @var object $oddOrEvenObject Phpno1\Algorithm\Filter\OddOrEven
     */
    private $oddOrEvenObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->oddOrEvenObject = new OddOrEven();
    }

    /**
     * 单元测试case
     */
    public function testDescriptionExamples()
    {

        $this->assertEquals('even', $this->oddOrEvenObject->oddOrEven([0]));
        $this->assertEquals('odd', $this->oddOrEvenObject->oddOrEven([2, 5, 34, 6]));
        $this->assertEquals('even', $this->oddOrEvenObject->oddOrEven([0, -1, -5]));
    }
}
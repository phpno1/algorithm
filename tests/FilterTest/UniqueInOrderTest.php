<?php
/**
 * @package   Phpno1\Test\FilterTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\FilterTest;


use Phpno1\Algorithm\Filter\UniqueInOrder;
use PHPUnit\Framework\TestCase;

/**
 * Class UniqueInOrderTest
 *
 * @package       Phpno1\Test\FilterTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class UniqueInOrderTest extends TestCase
{

    /**
     * @var object $uniqueInOrderObject Phpno1\Algorithm\Filter\UniqueInOrder
     */
    private $uniqueInOrderObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->uniqueInOrderObject = new UniqueInOrder();
    }

    /**
     * 单元测试case
     */
    public function testSampleTest()
    {

        $this->assertEquals(['A', 'B', 'C', 'D', 'A', 'B'], $this->uniqueInOrderObject->uniqueInOrder('AAAABBBCCDAABBB'));
        $this->assertEquals([1], $this->uniqueInOrderObject->uniqueInOrder('1'));
    }
}
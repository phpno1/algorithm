<?php
/**
 * @package   Phpno1\Test\FilterTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\FilterTest;

use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\Filter\DontGiveMeFive;

/**
 * Class DontGiveMeFiveTest
 *
 * @package       Phpno1\Test\FilterTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class DontGiveMeFiveTest extends TestCase
{

    /**
     * @var object $dontGiveMeFiveObject Phpno1\Algorithm\Filter\DontGiveMeFive
     */
    private $dontGiveMeFiveObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->dontGiveMeFiveObject = new DontGiveMeFive();
    }

    /**
     * 单元测试case
     */
    public function testExamples()
    {
        $this->assertEquals(63, $this->dontGiveMeFiveObject->dontGiveMeFive(1, 70));
        $this->assertEquals(12, $this->dontGiveMeFiveObject->dontGiveMeFive(4, 17));
    }
}
<?php
/**
 * @package   Phpno1\Test\JudgeTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\TwoToOne;
use PHPUnit\Framework\TestCase;

/**
 * Class TwoToOneTest
 *
 * @package       Phpno1\Test\JudgeTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class TwoToOneTest extends TestCase
{

    /**
     * @var object $twoToOneObject Phpno1\Algorithm\Judge\TwoToOne
     */
    private $twoToOneObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->twoToOneObject = new TwoToOne();
    }

    /**
     * @param string $actual
     * @param string $expected
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
        $this->revTest($this->twoToOneObject->longest("aretheyhere", "yestheyarehere"), "aehrsty");
        $this->revTest($this->twoToOneObject->longest("loopingisfunbutdangerous", "lessdangerousthancoding"), "abcdefghilnoprstu");
        $this->revTest($this->twoToOneObject->longest("inmanylanguages", "theresapairoffunctions"), "acefghilmnoprstuy");
        $this->revTest($this->twoToOneObject->longest("lordsofthefallen", "gamekult"), "adefghklmnorstu");
    }
}
<?php
/**
 * @package   Phpno1\Test\JudgeTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\AverageString;
use PHPUnit\Framework\TestCase;

/**
 * Class AverageStringTest
 *
 * @package       Phpno1\Test\JudgeTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class AverageStringTest extends TestCase
{

    /**
     * @var object $averageStringObject Phpno1\Algorithm\Judge\AverageString
     */
    private $averageStringObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->averageStringObject = new AverageString();
    }

    /**
     * 单元测试case
     */
    public function testFixed()
    {
        $this->assertEquals("four", $this->averageStringObject->averageString("zero nine five two"));
        $this->assertEquals("three", $this->averageStringObject->averageString("four six two three"));
        $this->assertEquals("three", $this->averageStringObject->averageString("one two three four five"));
        $this->assertEquals("four", $this->averageStringObject->averageString("five four"));
        $this->assertEquals("zero", $this->averageStringObject->averageString("zero zero zero zero zero"));
        $this->assertEquals("two", $this->averageStringObject->averageString("one one eight one"));
        $this->assertEquals("n/a", $this->averageStringObject->averageString(""));
    }
}
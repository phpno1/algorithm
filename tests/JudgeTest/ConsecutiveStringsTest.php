<?php
/**
 * @package   Phpno1\Test\JudgeTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\ConsecutiveStrings;
use PHPUnit\Framework\TestCase;

/**
 * Class ConsecutiveStringsTest
 *
 * @package       Phpno1\Test\JudgeTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ConsecutiveStringsTest extends TestCase
{
    /**
     * @var object $consecutiveStringObject Phpno1\Algorithm\Judge\ConsecutiveStrings
     */
    private $consecutiveStringObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->consecutiveStringObject = new ConsecutiveStrings();
    }

    /**
     * @param array $actual
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
        $this->revTest($this->consecutiveStringObject->longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2), "abigailtheta");
        $this->revTest($this->consecutiveStringObject->longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1), "oocccffuucccjjjkkkjyyyeehh");
        $this->revTest($this->consecutiveStringObject->longestConsec([], 3), "");
    }
}
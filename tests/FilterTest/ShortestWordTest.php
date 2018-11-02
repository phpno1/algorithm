<?php
/**
 * @package   Phpno1\Test\FilterTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\FilterTest;

use Phpno1\Algorithm\Filter\ShortestWord;
use PHPUnit\Framework\TestCase;

/**
 * Class ShortestWordTest
 *
 * @package       Phpno1\Test\FilterTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ShortestWordTest extends TestCase
{

    /**
     * @var object $shortestWordObject Phpno1\Algorithm\Filter\ShortestWord
     */
    private $shortestWordObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->shortestWordObject = new ShortestWord();
    }

    /**
     * 单元测试case
     */
    public function testFindShort()
    {
        $this->assertEquals($this->shortestWordObject->findShort("bitcoin take over the world maybe who knows perhaps"), 3);
        $this->assertEquals($this->shortestWordObject->findShort("turns out random test cases are easier than writing out basic ones"), 3);
    }
}













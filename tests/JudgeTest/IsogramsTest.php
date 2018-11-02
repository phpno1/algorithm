<?php
/**
 * @package   Phpno1\Test\JudgeTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\JudgeTest;

use Phpno1\Algorithm\Judge\Isograms;
use PHPUnit\Framework\TestCase;

/**
 * Class IsogramsTest
 *
 * @package       Phpno1\Test\JudgeTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class IsogramsTest extends TestCase
{

    /**
     * @var object $isogramObject Phpno1\Algorithm\Judge\Isograms
     */
    private $isogramObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->isogramObject = new Isograms();
    }

    /**
     * 单元测试case
     */
    public function testIsIsogram()
    {
        $this->assertEquals(true, $this->isogramObject->isIsogram("Dermatoglyphics"));
        $this->assertEquals(true, $this->isogramObject->isIsogram("isogram"));
        $this->assertEquals(false, $this->isogramObject->isIsogram("aba"), "same chars may not be adjacent");
        $this->assertEquals(false, $this->isogramObject->isIsogram("moOse"), "same chars may not be same case");
        $this->assertEquals(false, $this->isogramObject->isIsogram("isIsogram"));
        $this->assertEquals(true, $this->isogramObject->isIsogram(""), "an empty string is a valid isogram");
    }
}
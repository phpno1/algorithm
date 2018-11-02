<?php
/**
 * @package   Phpno1\Test\Transformation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\Transformation;


use Phpno1\Algorithm\Transformation\AlphabetPosition;
use PHPUnit\Framework\TestCase;

/**
 * Class AlphabetPositionTest
 *
 * @package       Phpno1\Test\Transformation
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class AlphabetPositionTest extends TestCase
{

    /**
     * @var object $alphabetPositionObject Phpno1\Algorithm\Transformation\AlphabetPosition
     */
    private $alphabetPositionObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->alphabetPositionObject = new AlphabetPosition();
    }

    /**
     * 单元测试case
     */
    public function testFixed() {
        $this->assertEquals('20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11', $this->alphabetPositionObject->alphabetPosition('The sunset sets at twelve o\' clock.'));
        $this->assertEquals('20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20', $this->alphabetPositionObject->alphabetPosition('The narwhal bacons at midnight.'));
    }
}
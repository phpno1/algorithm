<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\Interpreter;
use PHPUnit\Framework\TestCase;

/**
 * Class InterpreterTest
 *
 * @package       Phpno1\Test\CalculationTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class InterpreterTest extends TestCase
{

    /**
     * @var object $interpreterObject Phpno1\Algorithm\Calculation\Interpreter
     */
    private $interpreterObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->interpreterObject = new Interpreter();
    }

    /**
     * 单元测试case
     */
    public function testExamples() {
        $this->assertEquals("10101100", $this->interpreterObject->interpreter("*", "00101100"));
        $this->assertEquals("01001100", $this->interpreterObject->interpreter(">*>*", "00101100"));
        $this->assertEquals("11010011", $this->interpreterObject->interpreter("*>*>*>*>*>*>*>*", "00101100"));
        $this->assertEquals("11111111", $this->interpreterObject->interpreter("*>*>>*>>>*>*", "00101100"));
        $this->assertEquals("00000000", $this->interpreterObject->interpreter(">>>>>*<*<<*", "00101100"));
    }
}
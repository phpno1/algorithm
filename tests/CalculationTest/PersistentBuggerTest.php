<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\PersistentBugger;
use PHPUnit\Framework\TestCase;

/**
 * Class PersistentBuggerTest
 *
 * @package       Phpno1\Test\CalculationTest
 *
 * 单元测试
 *
 * @category      test
 * @author        Yaha <1143990204@qq.com>
 */
class PersistentBuggerTest extends TestCase
{

    /**
     * @var object $persistentBuggerObject Phpno1\Algorithm\Calculation\PersistentBugge
     */
    private $persistentBuggerObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();

        $this->persistentBuggerObject = new PersistentBugger();
    }

    /**
     * 单元测试case
     */
    public function testDescriptionExamples()
    {

        $this->assertEquals(3, $this->persistentBuggerObject->persistence(39));
        $this->assertEquals(4, $this->persistentBuggerObject->persistence(999));
        $this->assertEquals(0, $this->persistentBuggerObject->persistence(4));
    }
}
<?php
/**
 * @Yaha
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/25
 * Time: 22:47
 */

namespace Phpno1\Test\PersistentBuggerTest;


use Phpno1\Algorithm\PersistentBugger\PersistentBugger;
use PHPUnit\Framework\TestCase;

class PersistentBuggerTest extends TestCase
{

    public function testDescriptionExamples()
    {

        $persistentBuggerObject = new PersistentBugger();

        $this->assertEquals(3, $persistentBuggerObject->persistence(39));
        $this->assertEquals(4, $persistentBuggerObject->persistence(999));
        $this->assertEquals(0, $persistentBuggerObject->persistence(4));
    }
}
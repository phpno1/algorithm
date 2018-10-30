<?php
/**
 * overviwe.
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/30
 * Time: 23:23
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\Interpreter;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    public function testExamples() {

        $interpreterObject = new Interpreter();

        // Flips the leftmost cell of the tape
        $this->assertEquals("10101100", $interpreterObject->interpreter("*", "00101100"));
        // Flips the second and third cell of the tape
        $this->assertEquals("01001100", $interpreterObject->interpreter(">*>*", "00101100"));
        // Flips all the bits in the tape
        $this->assertEquals("11010011", $interpreterObject->interpreter("*>*>*>*>*>*>*>*", "00101100"));
        // Flips all the bits that are initialized to 0
        $this->assertEquals("11111111", $interpreterObject->interpreter("*>*>>*>>>*>*", "00101100"));
        // Goes somewhere to the right of the tape and then flips all bits that are initialized to 1, progressing leftwards through the tape
        $this->assertEquals("00000000", $interpreterObject->interpreter(">>>>>*<*<<*", "00101100"));
    }
}
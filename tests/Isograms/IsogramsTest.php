<?php
/**
 * 等值线
 *
 * 如果存在相同字母则返回false
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/23
 * Time: 01:26
 */

namespace Phpno1\Test\Isograms;

use Phpno1\Algorithm\Isograms\Isograms;
use PHPUnit\Framework\TestCase;

class IsogramsTest extends TestCase
{

    public function testIsIsogram()
    {
        $isogramObject = new Isograms();

        $this->assertEquals(true, $isogramObject->isIsogram("Dermatoglyphics"));
        $this->assertEquals(true, $isogramObject->isIsogram("isogram"));
        $this->assertEquals(false, $isogramObject->isIsogram("aba"), "same chars may not be adjacent");
        $this->assertEquals(false, $isogramObject->isIsogram("moOse"), "same chars may not be same case");
        $this->assertEquals(false, $isogramObject->isIsogram("isIsogram"));
        $this->assertEquals(true, $isogramObject->isIsogram(""), "an empty string is a valid isogram");
    }
}
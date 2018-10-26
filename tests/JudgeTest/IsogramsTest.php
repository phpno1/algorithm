<?php
/**
 * User: @Yaha
 * Date: 2018/10/23
 * Time: 01:26
 */

namespace Phpno1\Test\JudgeTest;

use Phpno1\Algorithm\Judge\Isograms;
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
<?php
/**
 * 给定一个数组的开始和结束标志，过滤掉5中的数组
 * User: @yaha
 * Date: 2018/10/24
 * Time: 22:36
 */

namespace Phpno1\Algorithm\DontGiveMeFive;

use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\DontGiveMeFive\DontGiveMeFive;

class DontGiveMeFiveTest extends TestCase
{
    public function testExamples() {

        $dontGiveMeFiveObject = new DontGiveMeFive();

        $this->assertEquals(63, $dontGiveMeFiveObject->dontGiveMeFive(1, 70));
        $this->assertEquals(12, $dontGiveMeFiveObject->dontGiveMeFive(4, 17));
    }
}
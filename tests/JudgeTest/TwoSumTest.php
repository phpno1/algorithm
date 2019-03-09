<?php
/**
 * @package   Phpno1\Test\JudgeTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{

    /**
     * @test
     */
    public function twoSumTest()
    {
        $twoSumObj = new TwoSum();

        $this->assertEquals([0, 1], $twoSumObj->twoSum([2, 7, 11, 15], 9));
        $this->assertEquals([1, 2], $twoSumObj->twoSum([3, 2, 4], 6));
        $this->assertEquals([0, 1], $twoSumObj->twoSum([3, 3], 6));
    }
}
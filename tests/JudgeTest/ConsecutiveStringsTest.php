<?php
/**
 * overviwe.
 * User: @yaha
 * Date: 2018/10/26
 * Time: 23:58
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\ConsecutiveStrings;
use PHPUnit\Framework\TestCase;

class ConsecutiveStringsTest extends TestCase
{

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {

        $consecutiveStringObject = new ConsecutiveStrings();

        $this->revTest($consecutiveStringObject->longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2), "abigailtheta");
        $this->revTest($consecutiveStringObject->longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1), "oocccffuucccjjjkkkjyyyeehh");
        $this->revTest($consecutiveStringObject->longestConsec([], 3), "");
    }
}
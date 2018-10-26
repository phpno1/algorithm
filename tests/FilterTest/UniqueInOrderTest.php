<?php
/**
 * overviwe.
 * User: @Yaha
 * Date: 2018/10/25
 * Time: 23:53
 */

namespace Phpno1\Test\FilterTest;


use Phpno1\Algorithm\Filter\UniqueInOrder;
use PHPUnit\Framework\TestCase;

class UniqueInOrderTest extends TestCase
{

    public function testSampleTest()
    {

        $uniqueInOrderObject = new UniqueInOrder();

//        $this->assertEquals(['A', 'B', 'C', 'D', 'A', 'B'], $uniqueInOrderObject->uniqueInOrder('AAAABBBCCDAABBB'));
        $this->assertEquals([1], $uniqueInOrderObject->uniqueInOrder('1'));
    }
}
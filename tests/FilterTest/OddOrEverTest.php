<?php
/**
 * User: @yaha
 * Date: 2018/10/24
 * Time: 22:23
 */

namespace Phpno1\Test\FilterTest;

use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\Filter\OddOrEven;

class OddOrEverTest extends TestCase
{

    public function testDescriptionExamples()
    {

        $oddOrEven = new OddOrEven();

        $this->assertEquals('even', $oddOrEven->oddOrEven([0]));
        $this->assertEquals('odd', $oddOrEven->oddOrEven([2, 5, 34, 6]));
        $this->assertEquals('even', $oddOrEven->oddOrEven([0, -1, -5]));
    }
}
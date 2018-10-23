<?php
/**
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/23
 * Time: 23:33
 */

namespace Phpno1\Test\ShortestWord;

use Phpno1\Algorithm\ShortestWord\ShortestWord;

use PHPUnit\Framework\TestCase;

class ShortestWordTest extends TestCase
{

    public function testFindShort()
    {
        $shortestWordObject = new ShortestWord();

        $this->assertEquals($shortestWordObject->findShort("bitcoin take over the world maybe who knows perhaps"), 3);
        $this->assertEquals($shortestWordObject->findShort("turns out random test cases are easier than writing out basic ones"), 3);
    }
}













<?php
/**
 * overviwe.
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/26
 * Time: 23:38
 */

namespace Phpno1\Test\JudgeTest;


use Phpno1\Algorithm\Judge\TwoToOne;
use PHPUnit\Framework\TestCase;

class TwoToOneTest extends TestCase
{

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {

        $twoToOneObject = new TwoToOne();

        $this->revTest($twoToOneObject->longest("aretheyhere", "yestheyarehere"), "aehrsty");
        $this->revTest($twoToOneObject->longest("loopingisfunbutdangerous", "lessdangerousthancoding"), "abcdefghilnoprstu");
        $this->revTest($twoToOneObject->longest("inmanylanguages", "theresapairoffunctions"), "acefghilmnoprstuy");
        $this->revTest($twoToOneObject->longest("lordsofthefallen", "gamekult"), "adefghklmnorstu");
    }
}
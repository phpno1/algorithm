<?php
/**
 * overviwe.
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/31
 * Time: 10:40
 */

namespace Phpno1\Test\FilterTest;


use Phpno1\Algorithm\Filter\ValidIP;
use PHPUnit\Framework\TestCase;

class ValidIPTest extends TestCase
{

    private $validIPObject;

    private function getValidIPObject()
    {
        if ($this->validIPObject) {
            return $this->validIPObject;
        }

        return $this->validIPObject = new ValidIP();
    }

    public function testValid()
    {
        $valid = [
            '0.0.0.0',
            '255.255.255.255',
            '238.46.26.43',
            '0.34.82.53',
        ];

        foreach ($valid as $input) {
            $this->assertTrue($this->getValidIPObject()->isValidIP($input), "Failed asserting that '$input' is a valid IP4 address.");
        }
    }

    public function testInvalid()
    {
        $invalid = [
            '',
            'abc.def.ghi.jkl',
            '123.456.789.0',
            ' 1.2.3.4',
        ];

        foreach ($invalid as $input) {
            $this->assertFalse($this->getValidIPObject()->isValidIP($input), "Failed asserting that '$input' is an invalid IP4 address.");
        }
    }
}
<?php
/**
 * @package   Phpno1\Test\FilterTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\FilterTest;


use Phpno1\Algorithm\Filter\ValidIP;
use PHPUnit\Framework\TestCase;

/**
 * Class ValidIPTest
 *
 * @package       Phpno1\Test\FilterTest
 *
 * 单元测试
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ValidIPTest extends TestCase
{

    /**
     * @var object $validIPObject Phpno1\Algorithm\Filter\ValidIP
     */
    private $validIPObject;

    /**
     * 初始化object
     */
    public function setUp()
    {
        parent::setUp();
        $this->validIPObject = new ValidIP();
    }

    /**
     * 单元测试case 1
     */
    public function testValid()
    {
        $valid = [
            '0.0.0.0',
            '255.255.255.255',
            '238.46.26.43',
            '0.34.82.53',
        ];

        foreach ($valid as $input) {
            $this->assertTrue($this->validIPObject->isValidIP($input), "Failed asserting that '$input' is a valid IP4 address.");
        }
    }

    /**
     * 单元测试case 2
     */
    public function testInvalid()
    {
        $invalid = [
            '',
            'abc.def.ghi.jkl',
            '123.456.789.0',
            ' 1.2.3.4',
        ];

        foreach ($invalid as $input) {
            $this->assertFalse($this->validIPObject->isValidIP($input), "Failed asserting that '$input' is an invalid IP4 address.");
        }
    }
}
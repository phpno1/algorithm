<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\LargeDiv;
use PHPUnit\Framework\TestCase;

class LargeDivTest extends TestCase
{

    private $largeDivObject;

    public function setUp()
    {
        parent::setUp();

        $this->largeDivObject = new LargeDiv();
    }

    public function testSimple()
    {
        $this->assertEquals("6", $this->largeDivObject->largeDiv("12", "2"));
        $this->assertEquals("3", $this->largeDivObject->largeDiv("6", "2"));
        $this->assertEquals("2.5", $this->largeDivObject->largeDiv("5", "2"));
        $this->assertEquals("25", $this->largeDivObject->largeDiv("13.25", "0.53"));
        $this->assertEquals("0", $this->largeDivObject->largeDiv("0", "20"));
    }

    public function testSign()
    {
        $this->assertEquals("-3", $this->largeDivObject->largeDiv("-6", "2"));
        $this->assertEquals("2.5", $this->largeDivObject->largeDiv("-5", "-2"));
        $this->assertEquals("-25", $this->largeDivObject->largeDiv("13.25", "-0.53"));
    }

    public function testRecurring()
    {
        $this->assertEquals("0.33333333333333333333", $this->largeDivObject->largeDiv("1", "3"));
        $this->assertEquals("0.11111111111111111111", $this->largeDivObject->largeDiv("1", "9"));
        $this->assertEquals("3.14285714285714285714", $this->largeDivObject->largeDiv("22", "7"));
        $this->assertEquals("0.15492957746478873239", $this->largeDivObject->largeDiv("11", "71"));
        $this->assertEquals("0", $this->largeDivObject->largeDiv("1", "10000000000000000000000000"));
        $this->assertEquals("16.66666666666666666666", $this->largeDivObject->largeDiv("50", "3"));
        $this->assertEquals("0.57735026971258486282", $this->largeDivObject->largeDiv("0.5", "0.866025403"));
        $this->assertEquals("16", $this->largeDivObject->largeDiv("12.25", "0.765625"));
        $this->assertEquals("106475822473709218293379263812921190234668579685067916856236669722641859955.18604651162790697674", $this->largeDivObject->largeDiv("9156920732738992773230616687911222360181497852915840849636353596147199956146", "86"));
    }
}
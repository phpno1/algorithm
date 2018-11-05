<?php

/**
 * @package    Phpno1\Algorithm\ArrayPluck
 * @author     ice <354037968@@qq.com>
 * @link       https://github.com/yb19890724
 */

namespace Phpno1\Test\FilterTest;

use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\Filter\ArrayPluck;

/**
 * Class ArrayPluckTest
 *
 *  多维数组扁平化一维度数组
 *      数组内可嵌套多维数组
 *      数组内可是字符串或数值
 * @package Phpno1\Test\CalculationTest
 * @author  ice <354037968@@qq.com>
 */

class ArrayPluckTest extends TestCase
{
    /**
     * @var object $buyingCarCasesObject Phpno1\Algorithm\Filter\ArrayPluck
     */
    private $arrayPluckObject;

    public function setUp()
    {
        parent::setUp();
        $this->arrayPluckObject = new ArrayPluck();
    }


    /**
     * get array pluck
     * @test
     */
    public function testArrayPluck()
    {

        $this->assertEquals(
            count($this->arrayPluckObject->arrayPluck([ [ '1' ] , [ '2' ] ])) ,
            2
        );

        $this->assertEquals(
            count($this->arrayPluckObject->arrayPluck([ [ '1' ] , '2' ])) ,
            2
        );

        $this->assertEquals(
            count($this->arrayPluckObject->arrayPluck(
                [
                    [ '1' ] ,
                    '2' ,
                    [
                        [3]
                    ]
                ])
            ) ,
            3
        );
    }


}
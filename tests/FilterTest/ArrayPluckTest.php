<?php

namespace Phpno1\Test\FilterTest;

use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\Filter\ArrayPluck;

class ArrayPluckTest extends TestCase
{
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
<?php

namespace Phpno1\Algorithm\Filter;

use RecursiveIteratorIterator;
use RecursiveArrayIterator;
use PHPUnit\Framework\TestCase;
use Phpno1\Algorithm\Filter\ArrayPluck;


class ArrayPluckTest extends TestCase
{
    private $arrayPluck;

    public function setUp()
    {
        parent::setUp();
        $this->arrayPluck = new ArrayPluck();
    }


    /**
     * get array pluck
     * @test
     */
    public function testArrayPluck()
    {

        $this->assertEquals(
            count($this->arrayPluck->arrayPluck([ [ '1' ] , [ '2' ] ])) ,
            2
        );

        $this->assertEquals(
            count($this->arrayPluck->arrayPluck([ [ '1' ] , '2' ])) ,
            2
        );

        $this->assertEquals(
            count($this->arrayPluck->arrayPluck(
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
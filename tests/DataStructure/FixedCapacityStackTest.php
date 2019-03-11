<?php
/**
 * @package   Phpno1\Test\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\DataStructure;


use Phpno1\Algorithm\DataStructure\Base\FixedCapacityStack;
use PHPUnit\Framework\TestCase;

class FixedCapacityStackTest extends TestCase
{

    private $fixedCapacityStackOfString;

    public function setUp()
    {
        $this->fixedCapacityStackOfString = new FixedCapacityStack();
        parent::setUp();
    }

    /**
     * @test
     */
    public function push_test()
    {

        $this->fixedCapacityStackOfString->push('1');
        $this->fixedCapacityStackOfString->push('2');
        $this->fixedCapacityStackOfString->push('1');
        $this->fixedCapacityStackOfString->push('2');

        $this->assertEquals(['1', '2', '1', '2'], $this->fixedCapacityStackOfString->string);
    }

    /**
     * @test
     */
    public function pop_test()
    {
        $this->fixedCapacityStackOfString->push('1');
        $this->fixedCapacityStackOfString->push('2');
        $this->fixedCapacityStackOfString->push('1');
        $this->fixedCapacityStackOfString->push('2');
        $this->fixedCapacityStackOfString->pop();

        $this->assertEquals(['1', '2', '1'], $this->fixedCapacityStackOfString->string);
    }

    /**
     * @test
     */
    public function size_test()
    {
        $this->fixedCapacityStackOfString->push('1');
        $this->fixedCapacityStackOfString->push('2');
        $this->fixedCapacityStackOfString->push('1');
        $this->fixedCapacityStackOfString->push('2');
        $this->fixedCapacityStackOfString->pop();

        $this->assertEquals(3, $this->fixedCapacityStackOfString->length);
    }

    /**
     * @test
     */
    public function is_empty_test()
    {
        $this->fixedCapacityStackOfString->push('2');
        $this->fixedCapacityStackOfString->pop();
        $this->assertEmpty($this->fixedCapacityStackOfString->length);
    }

    /**
     * @test
     */
    public function list_test()
    {
        $this->assertEmpty($this->fixedCapacityStackOfString->length);

        $this->fixedCapacityStackOfString->push('to');

        $this->assertEquals(1, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->push('be');

        $this->assertEquals(2, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->push('or');

        $this->assertEquals(3, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->push('not');

        $this->assertEquals(4, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or', 'not'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->push('to');

        $this->assertEquals(5, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or', 'not', 'to'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->pop();

        $this->assertEquals(4, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or', 'not'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->push('to');

        $this->assertEquals(5, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or', 'not', 'to'], $this->fixedCapacityStackOfString->string);

        $this->fixedCapacityStackOfString->pop();

        $this->assertEquals(4, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or', 'not'], $this->fixedCapacityStackOfString->string);


        $this->fixedCapacityStackOfString->pop();

        $this->assertEquals(3, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or'], $this->fixedCapacityStackOfString->string);


        $this->fixedCapacityStackOfString->push('that');

        $this->assertEquals(4, $this->fixedCapacityStackOfString->length);
        $this->assertEquals(['to', 'be', 'or', 'that'], $this->fixedCapacityStackOfString->string);
    }
}
<?php
/**
 * @package   Phpno1\Test\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\DataStructure;


use Phpno1\Algorithm\DataStructure\Lists\ListsDDL;
use Phpno1\Algorithm\DataStructure\Lists\ListsDML;
use Phpno1\Algorithm\DataStructure\Lists\Lists;
use PHPUnit\Framework\TestCase;

class ListsTest extends TestCase
{

    public $lists;
    public $listsDDL;
    public $listsDML;

    public function setUp()
    {

        $this->lists = new Lists();

        $this->lists->setLength(5);
        $this->lists->setList([1, 2, 4, 5, 3]);

        $this->listsDDL = new ListsDDL($this->lists);

        $this->listsDML = new ListsDML($this->lists, $this->listsDDL);

        parent::setUp();
    }

    /**
     * 测试顺序表长度
     *
     * @test
     */
    public function get_length()
    {
        $this->assertEquals(5, $this->listsDDL->lengthLists());
    }

    /**
     * 清除顺序表之后检查是否为空
     *
     * @test
     */
    public function check_empty()
    {
        $this->assertFalse($this->listsDDL->emptyLists());
        $this->listsDML->clearLists();
        $this->assertTrue($this->listsDDL->emptyLists());
    }

    /**
     * 超过顺序表下标数据
     *
     * @test
     */
    public function get_invalid_index_lists()
    {
        $this->assertEquals(2, $this->listsDDL->findElem(1));
        $this->assertNull($this->listsDDL->findElem(7));
        $this->assertNull($this->listsDDL->findElem(-1));
    }

    /**
     * @test
     */
    public function according_to_elements_for_subscript()
    {
        $this->assertEquals(1, $this->listsDDL->findIndexForInt(2));
        $this->assertNull($this->listsDDL->findIndexForInt(7));
    }

    public function print_lists()
    {
        $this->assertEquals('[1,2,4,5,3]', $this->listsDDL->traversing());
    }

    /**
     * @test
     */
    public function insert_elem()
    {
        $this->assertTrue($this->listsDML->insert(2, 3));

        $this->assertEquals([1, 2, 4, 2, 5, 3], $this->lists->list);
        $this->assertEquals(6, $this->lists->length);

        $this->listsDML->insert(10, 10);
        $this->assertEquals([1, 2, 4, 2, 5, 3, 10], $this->lists->list);
        $this->assertEquals(7, $this->lists->length);

        $this->listsDML->insert(11, -11);
        $this->assertEquals([1, 2, 4, 2, 5, 3, 10, 11], $this->lists->list);
        $this->assertEquals(8, $this->lists->length);

        $this->listsDML->insert(12, 0);
        $this->assertEquals([12, 1, 2, 4, 2, 5, 3, 10, 11], $this->lists->list);
        $this->assertEquals(9, $this->lists->length);

        $this->listsDML->insert(13, 9);
        $this->assertEquals([12, 1, 2, 4, 2, 5, 3, 10, 11, 13], $this->lists->list);
        $this->assertEquals(10, $this->lists->length);
    }

    /**
     * @test
     */
    public function delete_index()
    {
        $this->assertTrue($this->listsDML->deleteToIndex(1));
        $this->assertEquals([1, 4, 5, 3], $this->lists->list);
        $this->assertEquals(4, $this->lists->length);

        $this->assertTrue($this->listsDML->deleteToIndex(0));
        $this->assertEquals([4, 5, 3], $this->lists->list);
        $this->assertEquals(3, $this->lists->length);

        $this->assertFalse($this->listsDML->deleteToIndex(7));
        $this->assertEquals([4, 5, 3], $this->lists->list);
        $this->assertEquals(3, $this->lists->length);
    }

    /**
     * @test
     */
    public function edit_elem()
    {
        $this->assertTrue($this->listsDML->editToElem(2, 5));
        $this->assertEquals([1, 5, 4, 5, 3], $this->lists->list);

        $this->assertFalse($this->listsDML->editToElem(100, 13));

        $this->assertTrue($this->listsDML->editToIndex(0, 10));
        $this->assertEquals([10, 5, 4, 5, 3], $this->lists->list);
    }
}
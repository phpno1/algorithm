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

    public function setUp()
    {

        Lists::setLength(5);
        Lists::setList([1, 2, 4, 5, 3]);

        parent::setUp();
    }

    /**
     * 测试顺序表长度
     *
     * @test
     */
    public function get_length()
    {
        $this->assertEquals(5, ListsDDL::lengthLists());
    }

    /**
     * 清除顺序表之后检查是否为空
     *
     * @test
     */
    public function check_empty()
    {
        $this->assertFalse(ListsDDL::emptyLists());
        ListsDML::clearLists();
        $this->assertTrue(ListsDDL::emptyLists());
    }

    /**
     * 超过顺序表下标数据
     *
     * @test
     */
    public function get_invalid_index_lists()
    {
        $this->assertEquals(2, ListsDDL::findElem(1));
        $this->assertNull(ListsDDL::findElem(7));
        $this->assertNull(ListsDDL::findElem(-1));
    }

    /**
     * @test
     */
    public function according_to_elements_for_subscript()
    {
        $this->assertEquals(1, ListsDDL::findIndexForInt(2));
        $this->assertNull(ListsDDL::findIndexForInt(7));
    }

    public function print_lists()
    {
        $this->assertEquals('[1,2,4,5,3]', ListsDDL::traversing());
    }

    /**
     * @test
     */
    public function insert_elem()
    {
        $this->assertTrue(ListsDML::insert(2, 3));

        $this->assertEquals([1, 2, 4, 2, 5, 3], Lists::$list);
        $this->assertEquals(6, Lists::$length);

        ListsDML::insert(10, 10);
        $this->assertEquals([1, 2, 4, 2, 5, 3, 10], Lists::$list);
        $this->assertEquals(7, Lists::$length);

        ListsDML::insert(11, -11);
        $this->assertEquals([1, 2, 4, 2, 5, 3, 10, 11], Lists::$list);
        $this->assertEquals(8, Lists::$length);

        ListsDML::insert(12, 0);
        $this->assertEquals([12, 1, 2, 4, 2, 5, 3, 10, 11], Lists::$list);
        $this->assertEquals(9, Lists::$length);

        ListsDML::insert(13, 9);
        $this->assertEquals([12, 1, 2, 4, 2, 5, 3, 10, 11, 13], Lists::$list);
        $this->assertEquals(10, Lists::$length);
    }

    /**
     * @test
     */
    public function delete_index()
    {
        $this->assertTrue(ListsDML::deleteToIndex(1));
        $this->assertEquals([1, 4, 5, 3], Lists::$list);
        $this->assertEquals(4, Lists::$length);

        $this->assertTrue(ListsDML::deleteToIndex(0));
        $this->assertEquals([4, 5, 3], Lists::$list);
        $this->assertEquals(3, Lists::$length);

        $this->assertFalse(ListsDML::deleteToIndex(7));
        $this->assertEquals([4, 5, 3], Lists::$list);
        $this->assertEquals(3, Lists::$length);
    }
}
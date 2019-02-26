<?php
/**
 * @package   Phpno1\Test\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\DataStructure;


use Phpno1\Algorithm\DataStructure\Base\Node;
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

        parent::setUp();
    }


    /**
     * @test
     */
    public function add_list()
    {

        $listsObj = new Lists();

        $listsObj->init();

        $n = 0;
        while ($n < 10) {
            $nodeData       = new Node();
            $nodeData->data = 'node' . $n;

            $listsObj->add($nodeData);
            $n++;
        }


        var_dump($listsObj);
    }
}
<?php
/**
 * @package   Phpno1\Test\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\DataStructure;


use Phpno1\Algorithm\DataStructure\Base\Node;
use Phpno1\Algorithm\DataStructure\Lists;
use Phpno1\Algorithm\DataStructure\ListsDML;
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

        $n = 0;
        while ($n < 10) {
            $nodeData       = new Node();
            $nodeData->data = 'node' . $n;

            $listsObj->add($nodeData);
            $n++;
        }
        $listsDMLObj = new ListsDML($listsObj);

//        var_dump($listsDMLObj->current());
//        var_dump($listsDMLObj->key());
        $listsDMLObj->next();
        var_dump($listsDMLObj->current());
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->rewind();
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->next();
        $listsDMLObj->next();
        var_dump($listsDMLObj->current(),$listsDMLObj->key());
    }
}
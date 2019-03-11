<?php
/**
 * @package   Phpno1\Algorithm\DataStructure\Base
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Base;

/**
 * Class Bag
 *
 * @package       Phpno1\Algorithm\DataStructure
 *
 * 背包是一种不支持删除元素的数据集合，他的目的就是收集元素并迭代所有收集到的元素，可用于计算平均值、标准差等。
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Bag
{

    /**
     * 节点
     *
     * @var Node $first
     */
    private $first;

    /**
     * 添加数据
     *
     * @param mixed $item
     */
    public function add($item)
    {
        $oldFirst          = $this->first;
        $this->first       = new Node();
        $this->first->item = $item;
        $this->first->next = $oldFirst;
    }
}
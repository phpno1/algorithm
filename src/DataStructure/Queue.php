<?php
/**
 * @package   Phpno1\Algorithm\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure;


use Phpno1\Algorithm\DataStructure\Base\Node;

/**
 * Class Queue
 *
 * @package       Phpno1\Algorithm\DataStructure
 *
 * 队列
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Queue
{

    /**
     * @var Node 节点
     */
    private $first;
    /**
     * @var Node 前一个节点
     */
    private $last;
    /**
     * @var int 长度
     */
    private $length;

    /**
     * 队列是否为空
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->first === null;
    }

    /**
     * 队列长度
     *
     * @return int
     */
    public function size()
    {
        return $this->length;
    }

    /**
     * 入队列
     *
     * @param $item
     */
    public function enQueue($item)
    {

        // 存储上一节点数据
        $oldLast = $this->last;

        // 开辟新节点
        $this->last       = new Node();
        $this->last->item = $item;
        $this->last->next = null;

        if ($this->isEmpty()) {
            // 节点为空直接添加
            $this->first = $this->last;
        } else {
            // 向老节点插入数据
            $oldLast->next = $this->last;
        }

        $this->length++;
    }

    /**
     * 出队列
     *
     * @return mixed
     */
    public function deQueue()
    {
        if ($this->isEmpty()) {
            return null;
        }

        $item = $this->peek();

        $this->first = $this->first->next;

        $this->length--;

        if ($this->isEmpty()) {
            $this->last = null;
        }

        return $item;
    }

    /**
     * 当前指针数据
     *
     * @return mixed
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            return null;
        }

        return $this->first->item;
    }
}
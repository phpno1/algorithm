<?php
/**
 * @package   Phpno1\Algorithm\DataStructure\Lists
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Lists;

use Phpno1\Algorithm\DataStructure\Base\Node;

/**
 * Class ListInit
 *
 * @package       Phpno1\Algorithm\DataStructure\Lists
 *
 * 链表初始化及基础操作
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Lists implements Iterables
{

    /**
     * @var Node $first 头指针
     */
    public $first;

    /**
     * @var int $length 长度
     */
    public $length;


    /**
     * 初始化链表
     *
     * @return bool
     */
    public function init(): bool
    {
        $this->first = new Node();

        if ($this->first === null) {
            return false;
        }

        $this->first->data = null;
        $this->first->next = null;
        $this->length      = 0;

        return true;
    }

    /**
     * 检查链表是否为空
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->first->data ? false : true;
    }

    /**
     * 链表长度
     *
     * @return int
     */
    public function length(): int
    {
        return $this->length;
    }

    /**
     * 向链表中添加数据
     *
     * @param \Phpno1\Algorithm\DataStructure\Base\Node $node
     *
     * @return \Phpno1\Algorithm\DataStructure\Base\Node
     */
    public function add(Node $node)
    {
        if ($this->isEmpty()) {
            $this->first = $node;
        } else {
            $oldFirst          = $this->first;
            $this->first       = new Node();
            $this->first       = $node;
            $this->first->next = $oldFirst;
        }

        $this->length++;

        return $this->first;
    }
}
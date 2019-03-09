<?php
/**
 * @package   Phpno1\Algorithm\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure;


use Phpno1\Algorithm\DataStructure\Base\Node;

/**
 * Class Stack
 *
 * @package       Phpno1\Algorithm\DataStructure
 *
 * 栈
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Stack
{

    /**
     * 节点
     *
     * @var Node $first
     */
    private $first;

    /**
     * 长度
     *
     * @var int $length
     */
    private $length;

    /**
     * 空检查
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->first == null;
    }

    /**
     * 长度检查
     *
     * @return int
     */
    public function size()
    {
        return $this->length;
    }

    /**
     * 获取当前出栈数据
     *
     * @return mixed|null
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            return null;
        }

        return $this->first->item;
    }

    /**
     * 入栈
     *
     * @param mixed $item
     */
    public function push($item)
    {
        $oldFirst = $this->first;

        $this->first = new Node();

        $this->first->item = $item;
        $this->first->next = $oldFirst;

        $this->length++;
    }

    /**
     * 出栈
     *
     * @return mixed $first
     */
    public function pop()
    {
        $popFirst = $this->first->item;

        $this->first = $this->first->next;

        $this->length--;

        return $popFirst;
    }
}
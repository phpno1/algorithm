<?php
/**
 * @package   Phpno1\Algorithm\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure;

use \Iterator;

/**
 * Class ListsDML
 *
 * @package       Phpno1\Algorithm\DataStructure
 *
 * 链表指针移动
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ListsDML implements Iterator
{

    /**
     * @var string $index 下标
     */
    private $index;

    /**
     * @var int $current 当前位置
     */
    private $current;

    /**
     * @var \Phpno1\Algorithm\DataStructure\Lists 原链表
     */
    private $oldList;

    /**
     * @var \Phpno1\Algorithm\DataStructure\Lists 链表
     */
    private $list;

    /**
     * ListsDML constructor.
     *
     * @param \Phpno1\Algorithm\DataStructure\Lists $list
     */
    public function __construct(Lists $list)
    {
        $this->current = 0;
        $this->index   = 'first';
        $this->list    = $list;
        $this->oldList = $list;
    }

    /**
     * 返回当前指针值
     *
     * @return string
     */
    public function current()
    {
        if (! $this->valid()) {
            return null;
        }

        return current($this->list);
    }

    /**
     * 移动指针
     *
     * @return string
     */
    public function next()
    {
        if (! $this->valid()) {
            return null;
        }

        $this->current++;

        return $this->list = $this->list->{$this->index};
    }

    /**
     * 获取当前位置
     *
     * @return int
     */
    public function key()
    {
        $this->hasPosition();

        return $this->current;
    }

    /**
     * 判断是否存在后继
     *
     * @return bool
     */
    public function valid()
    {
        $this->hasPosition();

        return isset($this->list->{$this->index});
    }

    /**
     * 指针移动至头
     */
    public function rewind()
    {
        $this->list    = $this->oldList;
        $this->current = 0;
        $this->index   = 'first';
    }

    /**
     * 检查指针是否在第一个位置
     */
    private function hasPosition()
    {
        $this->index = $this->current ? 'next' : 'first';
    }
}
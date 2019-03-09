<?php
/**
 * @package   Phpno1\Algorithm\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure;

/**
 * Class FixedCapacityStackOfString
 *
 * @package       Phpno1\Algorithm\DataStructure
 *
 * 定容栈
 * 只能处理String值，他要求用例指定一个容量且不支持迭代
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class FixedCapacityStack
{

    /**
     * @var array $string
     */
    public $string;

    /**
     * @var int $length
     */
    public $length;

    /**
     * 初始化栈
     *
     * FixedCapacityStackOfString constructor.
     */
    public function __construct()
    {
        $this->length = 0;
        $this->string = [];
    }

    /**
     * 添加一个字符串
     *
     * @param string $item
     *
     * @return void
     */
    public function push($item)
    {
        $this->string[$this->length++] = $item;
    }

    /**
     * 删除最近添加的字符串
     *
     * @return string
     */
    public function pop()
    {
        $this->length--;

        return array_pop($this->string);
    }

    /**
     * 栈是否为空
     *
     * @return bool
     */
    public function isEmpty()
    {
        return $this->length === 0;
    }

    /**
     * 字符数量
     *
     * @return int
     */
    public function size()
    {
        return $this->length;
    }
}
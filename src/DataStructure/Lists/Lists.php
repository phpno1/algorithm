<?php
/**
 * @package   Phpno1\Algorithm\DataStructure\Lists
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Lists;


/**
 * Class Init
 *
 * @package       Phpno1\Algorithm\DataStructure\Lists
 *
 * 初始化链表
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Lists
{

    /**
     * @var array  数据
     */
    public $list;
    /**
     * @var int  长度
     */
    public $length;

    /**
     * Init constructor.
     */
    public function __construct()
    {
        $this->list   = [];
        $this->length = 0;
    }

    /**
     * 释放List
     */
    public function __destruct()
    {
        $this->list   = [];
        $this->length = 0;
    }

    /**
     * 设置数据
     *
     * @param array $list
     */
    public function setList(array $list)
    {
        $this->list = $list;
    }

    /**
     * 设置长度
     *
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
    }
}
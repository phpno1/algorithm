<?php
/**
 * @package   Phpno1\Algorithm\DataStructure\Lists
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Base;

/**
 * Class Lists
 *
 * 定义数据格式
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Node
{

    /**
     * @var string|int|float|double $data 数据
     */
    public $data;

    /**
     * @var int $next 后继
     */
    public $next;

    /**
     * 初始化基础数据
     *
     * Node constructor.
     */
    public function __construct()
    {
        $this->data   = null;
        $this->next   = null;
    }
}
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
    public static $list;
    /**
     * @var int  长度
     */
    public static $length;

    /**
     * Init constructor.
     */
    public function __construct()
    {
        self::$list   = [];
        self::$length = 0;
    }

    /**
     * 释放List
     */
    public function __destruct()
    {
        self::$list   = [];
        self::$length = 0;
    }

    /**
     * 设置数据
     *
     * @param array $list
     */
    public static function setList(array $list)
    {
        self::$list = $list;
    }

    /**
     * 设置长度
     *
     * @param int $length
     */
    public static function setLength(int $length)
    {
        self::$length = $length;
    }
}
<?php
/**
 * @package   Phpno1\Algorithm\DataStructure\Lists
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Lists;

/**
 * Class ListsDDL
 *
 * @package       Phpno1\Algorithm\DataStructure\Lists
 *
 * 查询操作
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ListsDDL extends Lists
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取顺序表长度
     *
     * @return int
     */
    public static function lengthLists()
    {
        return self::$length;
    }

    /**
     * 检查顺序表是否为空
     *
     * @return bool
     */
    public static function emptyLists()
    {
        if (self::$length === 0) {
            return true;
        }

        return false;
    }

    /**
     * 根据index获取顺序表中元素
     *
     * @param int $index 下标
     *
     * @return null|integer
     */
    public static function findElem(int $index)
    {
        if (self::emptyLists()) {
            return null;
        }

        if ($index > self::$length || $index < 0) {
            return null;
        }

        return self::$list[$index];
    }

    /**
     * 根据元素获取下标
     *
     * @param int $elem 元素
     *
     * @return null|int
     */
    public static function findIndexForInt(int $elem)
    {
        if (self::emptyLists()) {
            return null;
        }

        $countLoop = 0;
        while ($countLoop < self::$length) {

            if (self::$list[$countLoop] === $elem) {
                return $countLoop;
            }

            $countLoop++;
        }

        return null;
    }

    /**
     * 遍历顺序表
     *
     * @return string
     */
    public static function traversing()
    {
        if (self::emptyLists()) {
            echo '[]';
            exit();
        }

        $string = "[";

        $countLoop = 0;
        while ($countLoop < self::$length) {

            $string .= self::$list[$countLoop];
            $string .= $countLoop < self::$length - 1 ? ',' : ']';

            $countLoop++;
        }

        echo $string;
    }
}
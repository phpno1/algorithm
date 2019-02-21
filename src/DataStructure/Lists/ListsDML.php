<?php
/**
 * @package   Phpno1\Algorithm\DataStructure\Lists
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Lists;

/**
 * Class ListsDML
 *
 * @package       Phpno1\Algorithm\DataStructure\Lists
 *
 * 插入、更新、删除操作
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ListsDML extends Lists
{

    /**
     * 清空顺序表
     */
    public static function clearLists()
    {
        self::$list   = null;
        self::$length = 0;
    }

    /**
     * 插入一个元素
     *
     * @param int $elem  元素
     * @param int $index 下标
     *
     * @return bool
     */
    public static function insert(int $elem, int $index = -1)
    {
        if ($index >= self::$length || $index < 0) {
            self::$list[self::$length] = $elem;
            self::$length++;

            return true;
        }

        $countLoop = 0;
        while ($countLoop <= self::$length) {

            if ($countLoop >= $index) {

                $tempValue = self::$list[$countLoop];

                self::$list[$countLoop] = $elem;

                $elem = $tempValue;
            }

            $countLoop++;
        }

        self::$length++;

        return true;
    }

    public static function deleteToIndex(int $index)
    {
        if (! ListsDDL::findElem($index)) {
            return false;
        }

        $newLists = [];

        $countLoop = 0;
        $countList = 0;
        while ($countLoop < self::$length) {
            if ($index != $countLoop){
                $newLists[] = self::$list[$countLoop];
                $countList++;
            }

//            if ($index <= $countLoop) {
//                self::$list[$countLoop] = self::$list[$countLoop + 1];
//            }

            $countLoop++;
        }

        self::setList($newLists);
        self::setLength($countList);

        return true;
    }
}
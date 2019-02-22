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
class ListsDML
{

    /**
     * 清空顺序表
     */
    public static function clearLists()
    {
        Lists::$list   = null;
        Lists::$length = 0;
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
        if ($index >= Lists::$length || $index < 0) {
            Lists::$list[Lists::$length] = $elem;
            Lists::$length++;

            return true;
        }

        $countLoop = 0;
        while ($countLoop <= Lists::$length) {
            if ($countLoop >= $index) {
                $tempValue               = Lists::$list[$countLoop];
                Lists::$list[$countLoop] = $elem;
                $elem                    = $tempValue;
            }
            $countLoop++;
        }

        Lists::$length++;

        return true;
    }

    /**
     * 删除元素
     *
     * @param int $index 待删除的下标
     *
     * @return bool
     */
    public static function deleteToIndex(int $index)
    {
        if (! ListsDDL::findElem($index)) {
            return false;
        }

        $newLists = [];

        $countLoop = 0;
        $countList = 0;
        while ($countLoop < Lists::$length) {
            if ($index != $countLoop) {
                $newLists[] = Lists::$list[$countLoop];
                $countList++;
            }

            //            if ($index <= $countLoop) {
            //                self::$list[$countLoop] = self::$list[$countLoop + 1];
            //            }

            $countLoop++;
        }

        Lists::setList($newLists);
        Lists::setLength($countList);

        return true;
    }

    /**
     * 删除元素
     *
     * @param int $elem 待删除的元素
     *
     * @return bool
     */
    public static function deleteToElem(int $elem)
    {
        if (! ListsDDL::findIndexForInt($elem)) {
            return false;
        }

        $newLists = [];

        $countLoop = 0;
        $countList = 0;
        while ($countLoop < Lists::$length) {
            if ($elem != Lists::$list[$countLoop]) {
                $newLists[] = Lists::$list[$countLoop];
                $countList++;
            }

            //            if ($index <= $countLoop) {
            //                self::$list[$countLoop] = self::$list[$countLoop + 1];
            //            }

            $countLoop++;
        }

        Lists::setList($newLists);
        Lists::setLength($countList);

        return true;
    }

    public static function editToIndex(int $index, int $elem)
    {
        if (! ListsDDL::findElem($index)) {
            return false;
        }

        Lists::$list[$index] = $elem;

        return true;
    }

    public static function editToElem(int $oldElem, int $newElem)
    {
        if (! ListsDDL::findIndexForInt($oldElem)) {
            return false;
        }

        $countLoop = 0;
        while ($countLoop < Lists::$length) {
            if ($oldElem === Lists::$list[$countLoop]) {
                Lists::$list[$countLoop] = $newElem;

                return true;
            }

            $countLoop++;
        }

        return false;
    }
}
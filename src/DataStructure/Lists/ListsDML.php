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

    public $lists;
    public $listsDDL;

    public function __construct(Lists $lists, ListsDDL $listsDDL)
    {
        $this->lists    = $lists;
        $this->listsDDL = $listsDDL;
    }

    /**
     * 清空顺序表
     */
    public function clearLists()
    {
        $this->lists->setList([]);
        $this->lists->setLength(0);
    }

    /**
     * 插入一个元素
     *
     * @param int $elem  元素
     * @param int $index 下标
     *
     * @return bool
     */
    public function insert(int $elem, int $index = -1)
    {
        if ($index >= $this->lists->length || $index < 0) {
            $this->lists->list[$this->lists->length] = $elem;
            $this->lists->length++;

            return true;
        }

        $countLoop = 0;
        while ($countLoop <= $this->lists->length) {
            if ($countLoop >= $index) {
                $tempValue                     = $this->lists->list[$countLoop];
                $this->lists->list[$countLoop] = $elem;
                $elem                          = $tempValue;
            }
            $countLoop++;
        }

        $this->lists->length++;

        return true;
    }

    /**
     * 删除元素
     *
     * @param int $index 待删除的下标
     *
     * @return bool
     */
    public function deleteToIndex(int $index)
    {
        if (! $this->listsDDL->findElem($index)) {
            return false;
        }

        $countLoop = 0;

        while ($countLoop < $this->lists->length) {
            if ($index <= $countLoop) {
                $this->lists->list[$countLoop] = $this->lists->list[$countLoop + 1];
            }

            $countLoop++;
        }

        $this->lists->setLength(--$this->lists->length);

        return true;
    }

    /**
     * 删除元素
     *
     * @param int $elem 待删除的元素
     *
     * @return bool
     */
    public function deleteToElem(int $elem)
    {
        if (! $this->listsDDL->findIndexForInt($elem)) {
            return false;
        }

        $newLists = [];

        $countLoop = 0;
        $countList = 0;
        while ($countLoop < $this->lists->length) {
            if ($elem != $this->lists->list[$countLoop]) {
                $newLists[] = $this->lists->list[$countLoop];
                $countList++;
            }

            //            if ($index <= $countLoop) {
            //                Lists::$list[$countLoop] = Lists::$list[$countLoop + 1];
            //            }

            $countLoop++;
        }

        $this->lists->setList($newLists);
        $this->lists->setLength($countList);

        return true;
    }

    public function editToIndex(int $index, int $elem)
    {
        if (! $this->listsDDL->findElem($index)) {
            return false;
        }

        $this->lists->list[$index] = $elem;

        return true;
    }

    public function editToElem(int $oldElem, int $newElem)
    {
        if (! $this->listsDDL->findIndexForInt($oldElem)) {
            return false;
        }

        $countLoop = 0;
        while ($countLoop < $this->lists->length) {
            if ($oldElem === $this->lists->list[$countLoop]) {
                $this->lists->list[$countLoop] = $newElem;

                return true;
            }

            $countLoop++;
        }

        return false;
    }
}
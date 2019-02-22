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
class ListsDDL
{

    public $lists;

    public function __construct(Lists $lists)
    {
        $this->lists = $lists;
    }

    /**
     * 获取顺序表长度
     *
     * @return int
     */
    public function lengthLists()
    {
        return $this->lists->length;
    }

    /**
     * 检查顺序表是否为空
     *
     * @return bool
     */
    public function emptyLists()
    {
        if ($this->lists->length === 0) {
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
    public function findElem(int $index)
    {
        if ($this->emptyLists()) {
            return null;
        }

        if ($index > $this->lists->length || $index < 0) {
            return null;
        }

        return $this->lists->list[$index];
    }

    /**
     * 根据元素获取下标
     *
     * @param int $elem 元素
     *
     * @return null|int
     */
    public function findIndexForInt(int $elem)
    {
        if ($this->emptyLists()) {
            return null;
        }

        $countLoop = 0;
        while ($countLoop < $this->lists->length) {

            if ($this->lists->list[$countLoop] === $elem) {
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
    public function traversing()
    {
        if ($this->emptyLists()) {
            echo '[]';
            exit();
        }

        $string = "[";

        $countLoop = 0;
        while ($countLoop < $this->lists->length) {

            $string .= $this->lists->list[$countLoop];
            $string .= $countLoop < $this->lists->length - 1 ? ',' : ']';

            $countLoop++;
        }

        echo $string;
    }
}
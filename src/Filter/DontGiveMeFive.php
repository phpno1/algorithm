<?php
/**
 * @package    Phpno1\Algorithm\Filter
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Filter;

/**
 * Class DontGiveMeFive
 *
 * @package       Phpno1\Algorithm\Filter
 *
 * 给定一个数组的开始和结束标志，过滤掉5中的数组
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class DontGiveMeFive
{

    /**
     * @param $start
     * @param $end
     *
     * @return int
     */
    public function dontGiveMeFive($start, $end)
    {

        return count(array_filter(range($start, $end), function ($item) {

            /**
             * 过滤能被5整除但不是偶数
             */
            if ($item % 5 === 0) {
                if ($item % 2 !== 0) {
                    return [];
                }
            }

            return $item;
        }));
    }
}
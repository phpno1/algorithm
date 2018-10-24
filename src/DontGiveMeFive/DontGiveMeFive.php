<?php
/**
 * 给定一个数组的开始和结束标志，过滤掉5中的数组
 * User: @yaha
 * Date: 2018/10/24
 * Time: 22:36
 */

namespace Phpno1\Algorithm\DontGiveMeFive;

/**
 * Class DontGiveMeFive
 *
 * @package Phpno1\Algorithm\DontGiveMeFive
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

            // 过滤能被5整除但不是偶数
            if ($item % 5 === 0) {
                if ($item % 2 !== 0) {
                    return [];
                }
            }

            return $item;
        }));
    }
}
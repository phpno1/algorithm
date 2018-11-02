<?php

/**
 * @package    Phpno1\Algorithm\Judge
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Judge;

/**
 * Class TwoToOne
 *
 * @package       Phpno1\Algorithm\Judge
 *
 * 获取两个字符串中所有的字符并按顺序返回最长的字符串
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class TwoToOne
{

    /**
     * @param string $a  字符串一
     * @param string $b  字符串二
     *
     * @return array|string
     */
    function longest($a, $b)
    {
        /**
         * 将两个字符串拼接排序并求交集
         */
        return count_chars($a . $b, 3);
    }
}
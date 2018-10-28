<?php
/**
 * 获取两个字符串中所有的字符并按顺序返回最长的字符串
 * User: @yaha
 * Date: 2018/10/26
 * Time: 23:35
 */

namespace Phpno1\Algorithm\Judge;


/**
 * Class TwoToOne
 *
 * @package Phpno1\Algorithm\Judge
 */
class TwoToOne
{

    /**
     * @param $a
     * @param $b
     *
     * @return array|string
     */
    function longest($a, $b)
    {
        return count_chars($a . $b, 3);
    }
}
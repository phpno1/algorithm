<?php
/**
 * 等值线
 *
 * 如果存在相同字母则返回false
 * User: @Yaha
 * Date: 2018/10/23
 * Time: 01:26
 */

namespace Phpno1\Algorithm\Judge;

/**
 * 可简化为return count($array) === count(array_unique(str_split($array)))?true:false;
 *
 * Class Isograms
 *
 * @package Phpno1\Algorithm\Isograms
 */
class Isograms
{

    /**
     * @param $string
     *
     * @return bool
     */
    public function isIsogram($string)
    {
        // 字符串分割为数组
        $array = str_split(strtolower($string));

        // 去重之后和原数组比较
        if (count($array) === count(array_unique($array))) {
            return true;
        }

        return false;
    }
}
<?php

/**
 * @package    Phpno1\Algorithm\Judge
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Judge;

/**
 * Class Isograms
 *
 * @package       Phpno1\Algorithm\Judge
 *
 * 等值线（如果存在相同字母则返回false）
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
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
        /**
         * 字符串分割为数组
         */
        $array = str_split(strtolower($string));

        /**
         * 去重之后和原数组比较
         */
        if (count($array) === count(array_unique($array))) {
            return true;
        }

        return false;
    }
}
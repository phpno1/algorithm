<?php
/**
 * 等值线
 *
 * 如果存在相同字母则返回false
 * User: @Yaha
 * Date: 2018/10/23
 * Time: 01:26
 */

namespace Phpno1\Algorithm\Isograms;

class Isograms
{

    public function isIsogram($string)
    {
        $array = str_split(strtolower($string));

        if (count($array) === count(array_unique($array))) {
            return true;
        }

        return false;
    }
}
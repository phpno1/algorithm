<?php
/**
 * You are given an array strarr of strings and an integer k.
 * Your task is to return the first longest string consisting
 * of k consecutive strings taken in the array.
 *
 * # Example:
 * longest_consec(["zone", "abigail","theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"
 *
 * n being the length of the string array, if n = 0 or k > n or k <= 0 return "".
 *
 * User: @yaha
 * Date: 2018/10/26
 * Time: 23:56
 */

namespace Phpno1\Algorithm\Judge;


class ConsecutiveStrings
{

    function longestConsec($strArray, $k)
    {
        // 计算数组的长度
        $n = count($strArray);

        // 生成命题条件
        if ($n === 0 || $k > $n || $k <= 0) {
            return "";
        }

        $longestStr = '';
        for ($i = 0; $i < $n; $i++) {
            // 从当前位置取出K个元素组成字符串
            $nextStr = implode(array_slice($strArray, $i, $k));

            // 判断当前字符串长度是否大于上一个字符串长度
            if (strlen($longestStr) < strlen($nextStr)) {
                $longestStr = $nextStr;
            }
        }

        return $longestStr;
    }
}
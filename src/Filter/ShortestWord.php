<?php
/**
 * 给定一个字符串返回字符串中最短的单词
 * User: @Yaha
 * Date: 2018/10/23
 * Time: 23:33
 */

namespace Phpno1\Algorithm\Filter;

/**
 * Class ShortestWord
 *
 * @package Phpno1\Algorithm\ShortestWord
 */
class ShortestWord
{

    /**
     * @param $str
     *
     * @return mixed
     */
    public function findShort($str)
    {
        // 利用array_map取出每个字符串的长度
        return min(array_map('strlen', (explode(' ', $str))));
    }
}













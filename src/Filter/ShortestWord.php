<?php
/**
 * @package    Phpno1\Algorithm\Filter
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Filter;

/**
 * Class ShortestWord
 *
 * @package       Phpno1\Algorithm\Filter
 *
 * 给定一个字符串返回字符串中最短的单词
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
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
        /**
         * 利用array_map取出每个字符串的长度
         */
        return min(array_map('strlen', (explode(' ', $str))));
    }
}













<?php
/**
 * 多维数组扁平化一维度数组
 *  数组内可嵌套多维数组
 *  数组内可是字符串或数值
 */
namespace Phpno1\Algorithm\Filter;

use RecursiveIteratorIterator;
use RecursiveArrayIterator;

class ArrayPluck
{

    /**
     * @param array $array
     * @return array
     */
    public function arrayPluck(array $array) : array
    {
        return iterator_to_array(
            new RecursiveIteratorIterator(
                new RecursiveArrayIterator($array)
            ) ,
            false
        );
    }
}
<?php

/**
 * @package    Phpno1\Algorithm\ArrayPluck
 * @author     ice <354037968@@qq.com>
 * @link       https://github.com/yb19890724
 */

namespace Phpno1\Algorithm\Filter;

use RecursiveIteratorIterator;
use RecursiveArrayIterator;

/**
 * Class ArrayPluck
 *
 *  多维数组扁平化一维度数组
 *      数组内可嵌套多维数组
 *      数组内可是字符串或数值
 * @package Phpno1\Algorithm\ArrayPluck
 * @author  ice <354037968@@qq.com>
 */

class ArrayPluck
{

    /**
     * @uses  RecursiveIteratorIterator
     * @uses  RecursiveArrayIterator
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
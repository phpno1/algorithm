<?php

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
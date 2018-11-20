<?php
/**
 * @package   Phpno1\Algorithm\Calculation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;

class DoubleLinear
{

    public function dblLinear($n)
    {
        $array[] = 1;

        $i = 0;
        while ($i <= $n) {
            $array[] = (2 * $array[$i]) + 1;
            $array[] = (3 * $array[$i]) + 1;
            sort($array);
            $i++;
        }
        echo implode(',',$array).PHP_EOL;
        return $array[$n];
    }
}
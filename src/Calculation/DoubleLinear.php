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
            $a = (2 * $array[$i]) + 1;
            $b = (3 * $array[$i]) + 1;
            if ( ! in_array($a, $array)) {
                $array[] = $a;
            }
            if ( ! in_array($b, $array)) {
                $array[] = $b;
            }
            sort($array);
            $i++;
        }

        return $array[$n];
    }
}
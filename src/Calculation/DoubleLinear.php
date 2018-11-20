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

        $u = [1];
        $x = 0;
        $y = 0;
        for ($i = 0; $i < $n; $i++) {

            $nextX = 2 * $u[$x] + 1;
            $nextY = 3 * $u[$y] + 1;
            if ($nextX <= $nextY) {
                $u[] = $nextX;
                $x++;
                if ($nextX == $nextY) {
                    $y++;
                }
            } else {
                $u[] = $nextY;
                $y++;
            }
        }

        return $u[$n];
    }
}
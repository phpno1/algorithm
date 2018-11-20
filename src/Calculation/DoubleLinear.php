<?php
/**
 * @package    Phpno1\Algorithm\ArrayPluck
 * @author     ice <354037968@@qq.com>
 * @link       https://github.com/yb19890724
 */

namespace Phpno1\Algorithm\Calculation;

/**
 * Class DoubleLinear
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * 双线性
 *
 * @link          https://www.codewars.com/kata/twice-linear/php
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class DoubleLinear
{

    /**
     * @param $n
     *
     * @return mixed
     */
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
<?php
/**
 * @package    Phpno1\Algorithm\Calculation
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;


/**
 * Class PersistentBugger
 *
 * 给定一个数字，每位相乘，最终乘到一位数返回相乘次数
 *
 * @package Phpno1\Algorithm\PersistentBugger
 * @author  Yaha <1143990204@qq.com>
 */
class PersistentBugger
{

    /**
     * @param int $num
     *
     * @return int
     */
    public function persistence(int $num): int
    {
        $sentryNum = 0;

        while ($num > 9) {
            $num = array_product(str_split($num));
            $sentryNum++;
        }

        return (int)$sentryNum;
    }
}
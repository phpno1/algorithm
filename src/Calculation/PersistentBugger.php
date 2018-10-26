<?php
/**
 *  给定一个数字，每位相乘，最终乘到一位数返回相乘次数
 *
 * User: @yaha
 * Date: 2018/10/25
 * Time: 22:46
 */

namespace Phpno1\Algorithm\Calculation;


/**
 * Class PersistentBugger
 *
 * @package Phpno1\Algorithm\PersistentBugger
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
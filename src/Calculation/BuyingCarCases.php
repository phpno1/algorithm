<?php
/**
 * 给定一个n，从1到n生成一个连续数，使得a和b的乘积应该等于序列中所有数字的总和，不包括a和b
 * User: @yaha
 * Date: 2018/11/1
 * Time: 22:59
 */

namespace Phpno1\Algorithm\Calculation;


class BuyingCarCases
{

    /**
     * 优化后写法
     *
     * @param $n
     *
     * @return array
     */
    public function removeNb($n)
    {
        if ($n < 1) {
            return [];
        }

        $tempArray = [];

        // 高斯定理
        $sum = ($n * ($n + 1)) / 2;

        for ($sentryNum = 0; $sentryNum < $n; $sentryNum++) {

            // 因式分解
            $temp = ($sum - $sentryNum) / ($sentryNum + 1);

            // 检查判断
            if (is_int($temp) && 1 <= $temp && $n >= $temp) {
                $tempArray[] = [$sentryNum, $temp];
            }
        }

        return $tempArray;
    }
}
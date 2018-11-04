<?php
/**
 * @package    Phpno1\Algorithm\Calculation
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;

/**
 * Class BuyingCarCases
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * 给定一个n，从1到n生成一个连续数，使得a和b的乘积应该等于序列中所有数字的总和，不包括a和b
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class BuyingCarCases
{

    /**
     * 公式：sum - a - b = a * b
     *
     * @param  integer $n 初始值
     *
     * @return array
     */
    public function removeNb($n)
    {

        // 如果n小于1则不进行计算
        if ($n < 1) {
            return [];
        }

        // 初始化结果集
        $resultArray = [];

        // 利用高斯定理求和
        $sum = ($n * ($n + 1)) / 2;

        // 循环nc次找出b
        for ($sentryNum = 0; $sentryNum < $n; $sentryNum++) {

            // 因式分解：sum-a-b = a*b
            $temp = ($sum - $sentryNum) / ($sentryNum + 1);

            /*
             * 1、是否是整数
             * 2、是否在n的范围中
             */
            if (is_int($temp) && 1 <= $temp && $n >= $temp) {
                $resultArray[] = [$sentryNum, $temp];
            }
        }

        return $resultArray;
    }
}
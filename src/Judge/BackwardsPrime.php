<?php
/**
 * @package   Phpno1\Algorithm\Judge
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Judge;


/**
 * Class BackwardsPrime
 *
 * @package       Phpno1\Algorithm\Judge
 *
 * 给定a,b两个数，a < b且为正整数，求出他们当中的质数，并且反转后也是质数的集合
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class BackwardsPrime
{

    /**
     * @param $number
     *
     * @return bool
     */
    private function isPrime($number)
    {
        if ($number <= 3) {
            return $number > 1;
        } else if ($number % 2 === 0 || $number % 3 === 0) {
            return false;
        } else {
            for ($i = 5; $i * $i <= $number; $i += 6) {
                if ($number % $i === 0 || $number % ($i + 2) === 0) {
                    return false;
                }
            }

            return true;
        }
    }

    /**
     * @param integer $min 开始值
     * @param integer $max 结束值
     *
     * @return array
     */
    public function backwardsPrime($min, $max)
    {
        $result = [];

        for ($number = $min; $number <= $max; $number++) {

            /**
             * 求出反转数
             */
            $reverseNumber = (int)strrev((string)$number);

            /**
             * 1、判断两个数是否相等
             * 2、判断反转数是否是质数
             * 3、判断当前数是否是质数
             */
            if ($reverseNumber !== $number && $this->isPrime($reverseNumber) && $this->isPrime($number)) {
                $result[] = $number;
            }
        }

        return $result;
    }
}
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

        $numberArray = $this->buildNumber($n);

        $tempArray = [];

        // 高斯定理
        $sum       = ($n * ($n + 1)) / 2;

        foreach ($numberArray as $item) {

            // 因式分解
            $sentryNum = ($sum - $item) / ($item + 1);

            // 检查判断
            if (is_int($sentryNum) && 1 <= $sentryNum && $n >= $sentryNum) {
                $tempArray[] = [$item, $sentryNum];
            }
        }

        return $tempArray;
    }

    private function buildNumber($n)
    {
        return range(1, $n);
    }

    /**
     * 原写法
     *
     * @param $n
     *
     * @return array
     */
    private function oldRemoveNB($n)
    {
        if ($n < 1) {
            return [];
        }

        $numberArray = $this->buildNumber($n);

        $tempArray = [];
        $sum       = ($n * ($n + 1)) / 2;

        foreach ($numberArray as $index => $item) {

            unset($numberArray[$index]);
            foreach ($numberArray as $value) {
                if ($value == (($sum - $item - $value) / $item)) {
                    $tempArray[] = [$item, $value];
                    $tempArray[] = [$value, $item];
                }
            }
        }

        return $tempArray;
    }
}
<?php
/**
 * 反向波兰表示法
 *
 * User: @yaha
 * Date: 2018/10/28
 * Time: 22:43
 */

namespace Phpno1\Algorithm\Calculation;


class Calc
{

    private $option
        = [
            '+' => 'add',
            '-' => 'reduce',
            '*' => 'ride',
            '/' => 'except',
        ];

    public function calc(string $expr): float
    {

        if (empty($expr)) {
            return 0;
        }

        // 将字符串分割为数组
        $array = explode(' ', $expr);

        $stack = [];

        // 遍历数组
        foreach ($array as $be) {
            // 检查是否是数字
            if (is_numeric($be)) {
                $stack[] = $be;
            } else {
                // 如果不是数字则出栈
                $o2 = array_pop($stack);
                $o1 = array_pop($stack);

                // 判断操作类型
                $stack[] = $this->{$this->option[$be]}($o1, $o2);

            }
        }

        return array_pop($stack);
    }

    /**
     * 加
     *
     * @param $number1
     * @param $number2
     *
     * @return mixed
     */
    private function add($number1, $number2)
    {
        return $number1 + $number2;
    }

    /**
     * 减
     *
     * @param $number1
     * @param $number2
     *
     * @return mixed
     */
    private function reduce($number1, $number2)
    {
        return $number1 - $number2;
    }

    /**
     * 乘
     *
     * @param $number1
     * @param $number2
     *
     * @return float|int
     */
    private function ride($number1, $number2)
    {
        return $number1 * $number2;
    }

    /**
     * 除
     *
     * @param $number1
     * @param $number2
     *
     * @return float|int
     */
    private function except($number1, $number2)
    {
        return (float)$number1 / (float)$number2;
    }
}
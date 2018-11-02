<?php
/**
 * @package    Phpno1\Algorithm\Calculation
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;

/**
 * Class Calc
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * 反向波兰表示法
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Calc
{

    /**
     * @var array $option 操作合集
     */
    private $option
        = [
            '+' => 'add',
            '-' => 'reduce',
            '*' => 'ride',
            '/' => 'except',
        ];

    /**
     * @param string $expr 待转换的字符串
     *
     * @return float 计算结果
     */
    public function calc(string $expr): float
    {

        /**
         * 为空不计算
         */
        if (empty($expr)) {
            return 0;
        }

        /**
         * 将字符串分割为数组
         */
        $array = explode(' ', $expr);

        /**
         * 初始化栈
         */
        $stack = [];

        /**
         * 遍历数组
         */
        foreach ($array as $be) {
            /**
             * 检查是否是数字
             */
            if (is_numeric($be)) {
                /**
                 * 入栈
                 */
                $stack[] = $be;
            } else {
                /**
                 * 如果不是数字则出栈
                 */
                $o2 = array_pop($stack);
                $o1 = array_pop($stack);

                /**
                 * 判断操作类型计算结果
                 */
                $stack[] = $this->{$this->option[$be]}($o1, $o2);

            }
        }

        /**
         * 出栈
         */
        return array_pop($stack);
    }

    /**
     * 加法计算
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
     * 减法计算
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
     * 乘法计算
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
     * 除法计算
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
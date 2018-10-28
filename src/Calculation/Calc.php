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
                switch ($be) {
                    case '+':
                        $stack[] = $o1 + $o2;
                        break;
                    case '-':
                        $stack[] = $o1 - $o2;
                        break;
                    case '*':
                        $stack[] = $o1 * $o2;
                        break;
                    case '/':
                        $stack[] = (float)$o1 / (float)$o2;
                        break;
                    default:
                }
            }
        }

        return array_pop($stack);
    }
}
<?php
/**
 * 给定一个数组相加后的和是奇数还是偶数
 * User: @yaha
 * Date: 2018/10/24
 * Time: 22:11
 */

namespace Phpno1\Algorithm\Filter;

/**
 * 可简化为return array_sum($a) % 2 ? 'odd' : 'even';
 *
 * Class OddOrEven
 *
 * @package Phpno1\Algorithm\OddOrEven
 */
class OddOrEven
{

    /**
     * @param array $a
     *
     * @return string
     */
    public function oddOrEven(array $a): string
    {

        $sum = array_sum($a);

        if ($sum % 2 == 0) {
            return 'even';
        }

        return 'odd';
    }
}
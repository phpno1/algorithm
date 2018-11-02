<?php
/**
 * @package    Phpno1\Algorithm\Filter
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Filter;

/**
 * Class OddOrEven
 *
 * @package       Phpno1\Algorithm\Filter
 *
 * 给定一个数组相加后的和是奇数还是偶数
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
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
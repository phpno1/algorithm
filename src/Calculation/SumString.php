<?php
/**
 * @package   Phpno1\Algorithm\Calculation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;


/**
 * Class SumString
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * 两个字符串相加返回返回一个字符串
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class SumString
{

    /**
     * @param $a
     * @param $b
     *
     * @return float|int
     */
    public function sumString($a, $b)
    {
        return array_sum(array($a,$b));
    }
}
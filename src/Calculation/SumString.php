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
     * @param string $a
     * @param string $b
     *
     * @return float|int
     */
    public function sumString($a, $b)
    {
        // 使用该方式相加防止超长数据相加导致溢出而精度遗失
        return array_sum(array($a,$b));
    }
}
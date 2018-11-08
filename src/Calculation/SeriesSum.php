<?php
/**
 * @package   Phpno1\Algorithm\Calculation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;


/**
 * Class SeriesSum
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * 计算1+1/4+1/7+1/10+1/13+1/16+...
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class SeriesSum
{

    /**
     * @param integer $n
     *
     * @return float
     */
    public function seriesSum($n)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += 1 / ($i * 3 + 1);
        }

        return round($sum, 2);
    }
}
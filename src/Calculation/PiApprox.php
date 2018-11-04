<?php
/**
 * @package   Phpno1\Algorithm\Calculation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;


/**
 * Class PiApprox
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * 按精度计算PI
 * PI / 4 = 1 - 1/3 + 1/5 - 1/7 + ...给出PI / 4的近似值。
 * 当计算与给定语言的Math::PI常数之间的差值的绝对值小于epsilon时，输出结果
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class PiApprox
{

    /**
     * @param float $epsilon
     *
     * @return array
     */
    public function iterPi($epsilon)
    {

        $pi        = 0;
        $sentryNum = 0;

        for ($i = 0; ; $i++) {
            $pi += pow(-1, $i) * (1 / (2 * $i + 1));
            $sentryNum++;
            if (abs($pi * 4 - M_PI) < $epsilon) {
                break;
            }
        }

        return [$sentryNum, $pi * 4];
    }
}
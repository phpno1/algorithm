<?php
/**
 * @package   Phpno1\Algorithm\Calculation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;

/**
 * Class LargeDiv
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 *
 *
 * @link          https://www.codewars.com/kata/divide-numbers-as-strings/train/php
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class LargeDiv
{

    public function largeDiv($a, $b)
    {
        if (empty($b) || empty($a)) {
            return 0;
        }

        return $a / $b;
    }
}
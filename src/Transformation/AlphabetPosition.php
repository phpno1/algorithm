<?php
/**
 * @package   Phpno1\Algorithm\Transformation
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Transformation;


/**
 * Class AlphabetPosition
 *
 * @package       Phpno1\Algorithm\Transformation
 *
 * 将字母转换为数字。其中['a'=>1,'b'=>2,......,'z'=>26]
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class AlphabetPosition
{

    /**
     * @param string $s
     *
     * @return string
     */
    function alphabetPosition(string $s): string
    {
        $charArray = array_map(function ($item) {
            $temp = ord(strtolower($item));
            if (($temp > 96 && $temp < 123)) {
                return $temp - 96;
            }

            return 0;
        }, str_split($s));

        return implode(' ', array_filter($charArray));
    }
}
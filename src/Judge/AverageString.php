<?php
/**
 * @package   Phpno1\Algorithm\Judge
 * @author    Yaha <1143990204@qq.com>
 * @link      https=>//blog.flyaha.top
 */

namespace Phpno1\Algorithm\Judge;


/**
 * Class AverageString
 *
 * @package       Phpno1\Algorithm\Judge
 *
 * 您将获得0-9之间的一串数字。找出这些数字的平均值，并将其作为一个以字符串形式写出的整数（即：无小数位）返回
 * 例如：“zero nine five two” - >“four”如果字符串为空或包含大于9的数字，则返回“n / a”
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class AverageString
{

    /**
     * @param string $str
     *
     * @return string
     */
    public function averageString(string $str): string
    {
        // 边界检查
        if (empty($str)) {
            return 'n/a';
        }

        // 分割字符串
        $stringArray = explode(' ', $str);

        // 创建字符串与数字映射关系
        $stringToNumberMap = [
            'zero'  => 0,
            'one'   => 1,
            'two'   => 2,
            'three' => 3,
            'four'  => 4,
            'five'  => 5,
            'six'   => 6,
            'seven' => 7,
            'eight' => 8,
            'nine'  => 9,
        ];

        // 数字与字符串映射关系
        $numberToStringMap = array_keys($stringToNumberMap);

        // 存在差集则返回n/a
        if (count(array_diff($stringArray, $numberToStringMap))) {
            return 'n/a';
        }

        $sum = 0;
        foreach ($stringArray as $string) {
            $sum += $stringToNumberMap[$string];
        }

        return $numberToStringMap[($sum / count($stringArray))];
    }
}
<?php
/**
 * 去掉字符串或数组中连续相同的值
 *
 * User: @Yaha
 * Date: 2018/10/25
 * Time: 23:53
 */

namespace Phpno1\Algorithm\Filter;


/**
 * Class UniqueInOrder
 *
 * @package Phpno1\Algorithm\UniqueInOrder
 */
class UniqueInOrder
{

    /**
     * @param $iterable
     *
     * @return array|mixed
     */
    public function uniqueInOrder($iterable)
    {
        if (empty($iterable)) {
            return [];
        }

        // 如果是字符串则将他转换为数组
        $strArray = is_string($iterable) ? str_split($iterable) : $iterable;

        return array_reduce($strArray, function ($carry, $item) {

            // 如果当前值不等于carry中最后一个元素则将他存入carry中
            if ($item != end($carry)) {
                $carry[] = $item;
            }

            return $carry;
        }, []);
    }
}
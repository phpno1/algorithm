<?php
/**
 * @package   Phpno1\Algorithm\Judge
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Judge;

use Exception;


class TwoSum
{

    /**
     * @param $nums
     * @param $target
     *
     * @return array
     * @throws \Exception
     */
    public function twoSum($nums, $target)
    {
        $numsMap = array_flip($nums);

        foreach ($nums as $key => $num) {
            $complement = $target - $num;

            if (isset($numsMap[$complement]) && $numsMap[$complement] != $key) {
                return [$key, $numsMap[$complement]];
            }
        }

        throw new Exception();
    }
}
<?php
/**
 * 在一个小镇上，第一年population p0 = 1000
 * percent每年定期增加，每年都有50新的居民来到这个城镇。
 * 该镇需要多少年才能看到其population大于或等于p = 1200居民
 *
 * User: @yaha
 * Date: 2018/10/25
 * Time: 00:07
 */

namespace Phpno1\Algorithm\GrowthOfAPopulation;

/**
 * Class GrowthOfAPopulation
 *
 * @package Phpno1\Algorithm\GrowthOfAPopulation
 */
class GrowthOfAPopulation
{

    /**
     * @param $p0
     * @param $percent
     * @param $aug
     * @param $p
     *
     * @return int
     */
    public function nbYear($p0, $percent, $aug, $p)
    {

        $sentryNum = 0;

        while ($p0 < $p) {
            $p0 *= 1 + $percent / 100;
            $p0 += $aug;
            $sentryNum++;
        }

        return $sentryNum;
    }
}
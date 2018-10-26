<?php
/**
 * 在一个小镇上，第一年population p0 = 1000
 * percent每年定期增加，每年都有50新的居民来到这个城镇。
 * 该镇需要多少年才能看到其population大于或等于p = 1200居民？
 * User: @yaha
 * Date: 2018/10/25
 * Time: 00:07
 */

namespace Phpno1\Test\CalculationTest;

use Phpno1\Algorithm\Calculation\GrowthOfAPopulation;
use PHPUnit\Framework\TestCase;

/**
 * Class GrowthOfAPopulationTest
 *
 * @package Phpno1\Test\GrowthOfAPopulationTest
 */
class GrowthOfAPopulationTest extends TestCase
{

    /**
     * @param $actual
     * @param $expected
     */
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {

        $growthOfAPopulationObject = new GrowthOfAPopulation();

        $this->revTest($growthOfAPopulationObject->nbYear(1500, 5, 100, 5000), 15);
        $this->revTest($growthOfAPopulationObject->nbYear(1500000, 2.5, 10000, 2000000), 10);
    }
}
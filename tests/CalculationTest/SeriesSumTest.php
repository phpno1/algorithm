<?php
/**
 * @package   Phpno1\Test\CalculationTest
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\CalculationTest;


use Phpno1\Algorithm\Calculation\SeriesSum;
use PHPUnit\Framework\TestCase;

class SeriesSumTest extends TestCase
{

    private $seriesSumObject;

    public function setUp()
    {
        parent::setUp();

        $this->seriesSumObject = new SeriesSum();
    }

    public function testExamples() {
        $this->assertEquals('1.00', $this->seriesSumObject->seriesSum(1));
        $this->assertEquals('1.25', $this->seriesSumObject->seriesSum(2));
        $this->assertEquals('1.39', $this->seriesSumObject->seriesSum(3));
        $this->assertEquals('1.49', $this->seriesSumObject->seriesSum(4));
    }
}
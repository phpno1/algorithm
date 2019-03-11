<?php
/**
 * @package   Phpno1\Test\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Test\DataStructure;


use Phpno1\Algorithm\DataStructure\Find\QuickFind;
use Phpno1\Algorithm\DataStructure\Find\UnionFind;
use PHPUnit\Framework\TestCase;

class UnionFindTest extends TestCase
{

    /**
     * @test
     */
    public function union_test()
    {
        $n = 10;

        $unionFind = new UnionFind($n);
        $quickFind = new QuickFind();

        $p = [4, 3, 6, 9, 2, 5, 7, 6];
        $q = [3, 8, 5, 4, 1, 0, 2, 1];

        $i = 0;

        while ($i < 8) {
            if ($unionFind->connected($p[$i], $q[$i])) {
                continue;
            }

            //            echo $i.PHP_EOL;

            $quickFind->union($unionFind, $p[$i], $q[$i]);

            $i++;
        }

        var_dump($unionFind->count());

        $this->assertEquals(2, $unionFind->count());
    }
}
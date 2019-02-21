<?php
/**
 * @package   Phpno1\Algorithm\Judge
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Judge;

/**
 * Class IsRectangle
 *
 * @package       Phpno1\Algorithm\Judge
 *
 * 判断是否是矩形
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */

$a = new IsRectangle();

$a->isRectangle([[0, 0], [0, 1], [1, 0], [1, 1]]);

class IsRectangle
{

    public function isRectangle(array $axis)
    {
        $isAxis = $this->isAxis($axis);

        if (! $isAxis) {
            return $isAxis;
        }

    }

    private function isAxis($axis)
    {
        if (empty($axis) || count($axis) != 4) {
            return false;
        }

        return count($axis) === count(array_unique($axis)) ? true : false;
    }

    private function isSide($p1,$p2m,$p3,$p4)
    {
        
    }
}
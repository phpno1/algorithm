<?php
/**
 * @package   Phpno1\Algorithm\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Find;


/**
 * Class UnionFind
 *
 * @package       Phpno1\Algorithm\DataStructure
 *
 * 并查集（Union-Find）是解决动态连通性问题的一类非常高效的数据结构
 * 可以想象一张地图上有很多点，有些点之间是有道路相互联通的，而有些点则没有。
 * 如果我们现在要从点A走向点B，那么一个关键的问题就是判断我们能否从A走到B
 * 呢？换句话说，A和B是否是连通的。这是动态连通性最基本的诉求。现在给出一组
 * 数据，其中每个元素都是一对“点”，代表这对点之间是联通的，我们需要设计一个
 * 算法，让计算机依次读取这些数据，最后判断出其中任意两点是否连通。注意，并
 * 查集所涉及的动态连通性只是考虑“是否连通”这一二值判别问题，而不涉及连通的
 * 路径到底是什么。
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class UnionFind
{

    /**
     * 分量id（以触点作为索引）
     *
     * @var array $id
     */
    public $id;

    /**
     * 分量数量
     *
     * @var int $count
     */
    public $count;

    /**
     * @var QuickFind $quickFind
     */
    private $quickFind;

    /**
     * @param int $n
     */
    public function __construct($n)
    {
        // 初始化分量
        $this->count = $n;

        $countNum = 0;
        while ($countNum < $n) {
            $this->id[$countNum] = $countNum;
            $countNum++;
        }

        $this->quickFind = new QuickFind();
    }

    /**
     * 数量
     *
     * @return int
     */
    public function count()
    {
        return $this->count;
    }

    /**
     * 检查两个分量是否相同
     *
     * @param int $p
     * @param int $q
     *
     * @return boolean
     */
    public function connected($p, $q)
    {
        return $this->quickFind->find($this, $p) === $this->quickFind->find($this, $q);
    }
}
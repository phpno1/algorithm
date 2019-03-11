<?php
/**
 * @package   Phpno1\Algorithm\DataStructure
 * @author    Yaha <1143990204@qq.com>
 * @link      https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\DataStructure\Find;


class QuickFind
{

    /**
     * 查找分量值
     *
     * @param UnionFind $unionFind
     * @param int       $p
     *
     * @return int
     */
    public function find(UnionFind $unionFind, $p)
    {
        return $unionFind->id[$p];
    }

    /**
     * @param UnionFind $unionFind
     * @param int       $p
     * @param int       $q
     */
    public function union(UnionFind $unionFind, $p, $q)
    {
        $pID = $this->find($unionFind, $p);
        $qID = $this->find($unionFind, $q);

        if ($pID === $qID) {
            return;
        }

        foreach ($unionFind->id as &$id) {

            if ($id === $pID) {
                $id = $qID;
            }
        }

        $unionFind->count--;
    }
}
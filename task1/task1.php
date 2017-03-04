<?php

namespace mgbs\task1;

/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 04.03.17
 * Time: 22:01
 */
use mgbs\lib\btree\BTree;

/** a) Count the number of nodes in a tree. */
class task1
{
    // without type hinting this would acutally be a little easier, since oyu could discard the if checks
    public function countNumberOfNodes(BTree $bTree): int
    {
        $left = 0;
        $right = 0;

        if (is_a($bTree->getLeft(), BTree::class)) {
            $left = $this->countNumberOfNodes($bTree->getLeft());
        }

        if (is_a($bTree->getRight(), BTree::class)) {
            $right = $this->countNumberOfNodes($bTree->getRight());
        }
        return 1 + $left + $right;
    }
}

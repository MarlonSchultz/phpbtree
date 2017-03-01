<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 01.03.17
 * Time: 17:43
 */

namespace mgbs\lib\btree;

/**
 * Builds a Btree recursively
 * Adds values to the correct node
 * Does not add values twice
 *
 * Class BTreeFactory
 * @package mgbs\lib\btree
 */
class BTreeFactory
{
    /**
     * @param int $value
     * @return BTree
     */
    public function buildRootOnly(int $value): BTree
    {
        $btree = new BTree();
        $btree->setValue($value);
        return $btree;
    }

    /**
     * @param array $arrayOfInts
     * @return BTree
     */
    public function buildTreeWithChildren(array $arrayOfInts): BTree
    {
        $btree = $this->buildRootOnly($arrayOfInts[0]);
        array_shift($arrayOfInts);
        foreach ($arrayOfInts as $singleInt) {
            $this->addValueSorted($btree, $singleInt);
        }
        return $btree;
    }

    /**
     * @param BTree $root
     * @param int $newValue
     */
    public function addValueSorted(BTree $root, int $newValue)
    {
        if ($root->getValue() > $newValue) {
            $this->addLeftNode($root, $newValue);
        }

        if ($root->getValue() < $newValue) {
            $this->addRightNode($root, $newValue);
        }
    }

    /**
     * @param BTree $root
     * @param array $arrayOfInts
     */
    public function addMultipleValuesSorted(BTree $root, array $arrayOfInts)
    {
        foreach ($arrayOfInts as $singleInt) {
            $this->addValueSorted($root, $singleInt);
        }
    }

    /**
     * @param BTree $root
     * @param int $newValue
     */
    private function addLeftNode(BTree $root, int $newValue)
    {
        if (is_a($root->getLeft(), BTree::class)) {
            $this->addValueSorted($root->getLeft(), $newValue);
        }

        if (!is_a($root->getLeft(), BTree::class)) {
            $newNode = new BTree();
            $newNode->setValue($newValue);
            $root->setLeft($newNode);
        }
    }

    /**
     * @param BTree $root
     * @param int $newValue
     */
    private function addRightNode(BTree $root, int $newValue)
    {
        if (is_a($root->getRight(), BTree::class)) {
            $this->addValueSorted($root->getRight(), $newValue);
        }

        if (!is_a($root->getRight(), BTree::class)) {
            $newNode = new BTree();
            $newNode->setValue($newValue);
            $root->setRight($newNode);
        }
    }


}
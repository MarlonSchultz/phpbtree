<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 04.03.17
 * Time: 21:00
 */

namespace mgbs\Tests\lib\btree;

use mgbs\lib\btree\BTree;
use mgbs\lib\btree\BTreeFactory;
use PHPUnit\Framework\TestCase;

class BTreeFactoryTest extends TestCase
{

    /**
     * @var BTreeFactory
     */
    private $bTreeFactory;

    public function setUp()
    {
        $this->bTreeFactory = new BTreeFactory();
    }

    public function testIfRootIsCorrectlyBuilt()
    {
        $root = $this->bTreeFactory->buildRootOnly(10);
        self::assertTrue(is_a($root, BTree::class));
    }

    public function testIfTreeIsBuiltCorrectlyFromArray()
    {
        /**
         * array of [10,5,3,15,3] should be converted to tree:
         *      10
         *     /  \
         *    5   15
         *   /
         *  3
         *   \
         *   3
         */
        $tree = $this->bTreeFactory->buildTreeWithChildren([10, 5, 3, 15, 3]);
        self::assertTrue(is_a($tree, BTree::class));

        self::assertTrue(is_a($tree->getLeft(), BTree::class));
        self::assertTrue(is_a($tree->getRight(), BTree::class));

        self::assertEquals(10, $tree->getValue());
        self::assertEquals(5, $tree->getLeft()->getValue());
        self::assertEquals(3, $tree->getLeft()->getLeft()->getValue());
        self::assertEquals(3, $tree->getLeft()->getLeft()->getRight()->getValue());
        self::assertEquals(15, $tree->getRight()->getValue());
    }

    public function testIfAddingNewValuesWorksCorrectly()
    {
        $tree = $this->bTreeFactory->buildTreeWithChildren([10, 5, 3, 15, 3]);
        $this->bTreeFactory->addMultipleValuesSorted($tree, [15, -10]);

        self::assertEquals(15, $tree->getRight()->getRight()->getValue());
        self::assertEquals(-10, $tree->getLeft()->getLeft()->getLeft()->getValue());

    }
}

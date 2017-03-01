<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 01.03.17
 * Time: 17:25
 */


use mgbs\lib\btree\BTreeFactory;

require __DIR__ . '/vendor/autoload.php';

$btreeFactory = new BTreeFactory();
/**
 * array of [10,5,3,15] is converted to tree:
 *      10
 *     /  \
 *    5   15
 *   /
 *  3
 */
$btree = $btreeFactory->buildTreeWithChildren([10, 5, 3, 15]);

// is 5
echo $btree->getLeft()->getValue() . PHP_EOL;
// is 3
echo $btree->getLeft()->getLeft()->getValue() . PHP_EOL;
// is 15
echo $btree->getRight()->getValue() . PHP_EOL;


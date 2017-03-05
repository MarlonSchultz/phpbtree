<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 01.03.17
 * Time: 17:25
 */


use mgbs\lib\btree\BTreeFactory;
use mgbs\task1\task1;

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

$task1 = new task1();
echo $task1->getCountOfNodes($btree);
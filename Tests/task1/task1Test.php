<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 05.03.17
 * Time: 15:49
 */

namespace mgbs\task1;


use mgbs\lib\btree\BTreeFactory;
use PHPUnit\Framework\TestCase;

class task1Test extends Testcase
{
/** @var  task1 */
    private $task1;

    public function setUp()
    {
        $this->task1 = new task1();
        self::assertTrue(is_a($this->task1, task1::class));
    }

    public function testIfCountReturnsCorrectNumber()
    {
        $bTreeFactory = new BTreeFactory();
        $treeWith4Nodes = $bTreeFactory->buildTreeWithChildren([1, 2, 3, 4]);
        $treeWith10Nodes = $bTreeFactory->buildTreeWithChildren([10,9,8,7,6,5,4,3,2,1]);

        self::assertEquals(4, $this->task1->getCountOfNodes($treeWith4Nodes));
        self::assertEquals(10, $this->task1->getCountOfNodes($treeWith10Nodes));

    }
}

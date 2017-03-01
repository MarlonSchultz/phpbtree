<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 01.03.17
 * Time: 17:39
 */
namespace mgbs\lib\btree;


/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 01.03.17
 * Time: 17:21
 */
interface BTreeInterface
{
    /**
     * @param mixed $left
     * @return BTree
     */
    public function setLeft(Btree $left = null);

    /**
     * @param mixed $right
     * @return BTree
     */
    public function setRight(Btree $right = null);

    /**
     * @return mixed
     */
    public function getValue(): int;

    /**
     * @param mixed $value
     */
    public function setValue(int $value);

    /**
     * @return mixed
     */
    public function getLeft();

    /**
     * @return mixed
     */
    public function getRight();
}
<?php

namespace mgbs\lib\btree;

/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 01.03.17
 * Time: 17:21
 */
class BTree implements BTreeInterface
{
    private $left;

    private $right;

    private $value;

    /**
     * @param mixed $left
     * @return BTree
     */
    public function setLeft(Btree $left = null)
    {
        $this->left = $left;
        return $this;
    }

    /**
     * @param mixed $right
     * @return BTree
     */
    public function setRight(Btree $right = null)
    {
        $this->right = $right;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @return mixed
     */
    public function getRight()
    {
        return $this->right;
    }
}
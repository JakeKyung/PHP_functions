<?php
/**
 * Create by Jake 2023/03/13.
 * 후위순회.
 */
class Node
{
    public $value;
    public $leftChild;
    public $rightChild;

    public function __construct($value)
    {
        $this->value = $value;
        $this->leftChild = null;
        $this->rightChild = null;
    }
}

function postOrderTraversal($root)
{
    if ($root != null) {
        postOrderTraversal($root->leftChild);
        postOrderTraversal($root->rightChild);
        echo $root->value.' ';
    }
}

// Usage example:
$root = new Node(1);
$root->leftChild = new Node(2);
$root->rightChild = new Node(3);
$root->leftChild->leftChild = new Node(4);
$root->leftChild->rightChild = new Node(5);
postOrderTraversal($root);

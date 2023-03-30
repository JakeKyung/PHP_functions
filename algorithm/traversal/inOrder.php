<?php
/**
 * Create by Jake 2023/03/13.
 * 중위순회
 */
class Node {
    public $value;
    public $leftChild;
    public $rightChild;

    public function __construct($value) {
        $this->value = $value;
        $this->leftChild = null;
        $this->rightChild = null;
    }
}

function inOrderTraversal($root) {
    if ($root != null) {
        inOrderTraversal($root->leftChild);
        echo $root->value . " ";
        inOrderTraversal($root->rightChild);
    }
}

// Usage example:
$root = new Node(1);
$root->leftChild = new Node(2);
$root->rightChild = new Node(3);
$root->leftChild->leftChild = new Node(4);
$root->leftChild->rightChild = new Node(5);
inOrderTraversal($root);
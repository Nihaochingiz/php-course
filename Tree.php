<?php

class Tree {
    public $kind = 'Дуб';

    public function viewKind() {
        echo ($this->kind);
    }
}

$first_tree = new Tree;
$first_tree->viewKind();
<?php

class Animal {
    public $kind;
    public $name;

    public function viewData() {
        echo ($this->kind . $this->name);
    }
}

$Dog = new Animal;

$Dog->kind = 'red';
$Dog->name = 'Jack';

$Dog->viewData();
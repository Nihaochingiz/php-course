<?php

class Animal {
    public $kind;
    public $name;

    public function viewData() {
        echo ($this->kind . $this->name);
    }
    public function __construct()
    {
        echo "Я просто животное";
    }
    public function __destruct()
    {
        echo "Увы, мой жизненный цикл окончен";
    }
}

$Dog = new Animal;

$Dog->kind = 'red';
$Dog->name = 'Jack';

$Dog->viewData();
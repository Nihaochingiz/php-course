<?php

class Cat {
    public $name;
    public $color = "Белый";
    public function voice() {
        echo "Мяу!";
    }
    public function viewColor() {
        echo $this->color;
    }
}


$barsik = new Cat;
// $barsik->name = "Барсик";
// echo $barsik->name;
// $barsik->voice();

$barsik->viewColor();

$murka = new Cat();
$murka->color = 'Серый';
$murka->viewColor();

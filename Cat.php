<?php

class Cat {
    public $name = "Мурка";
    
    public function voice() {
        echo "Мяу!";
    }
}


$myCat = new Cat;

$myCat->voice();
echo($myCat->name);
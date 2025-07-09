<?php
class Dog {
    protected static function voice() {
        echo "Гав-гав!";
    }
}

class Horse extends Dog {
    public static function voice() {
        echo "И-го-го!";
    }
}

class Snake extends Horse {
    public $voice = "Ш-ш-ш!";
}

Snake::voice();
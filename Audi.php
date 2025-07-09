<?php

class Audi {
    public static $model = "Q4";
    public static $color = "Синий";
    public static function sayYourColor() {
        return  self::$color;
    }
}

echo Car::$wheels; // выведет: 4
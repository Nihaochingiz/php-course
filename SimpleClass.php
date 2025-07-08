<?php

class SimpleClass

{
    /*
    Обратите внимание на ключевое слово public, это обозначение видимости. В данном случае оно указывает на то, что метод может быть доступен из любого места в коде.
    */
    public $var = "Свойство";

    public function sayHello() {
        echo "Привет!";
    }

}
$a = new SimpleClass;

echo ($a->sayHello());
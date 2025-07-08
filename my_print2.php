<?php
function my_print2() {
    $phrase = fgets(STDIN); // Чтение строки из стандартного ввода
    echo $phrase; // Вывод строки
}

my_print2(); // Вызов функции
?>
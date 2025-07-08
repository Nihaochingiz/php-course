<?php
$country = trim(fgets(STDIN)); // Считываем ввод пользователя

if ($country == 'Великобритания') {
    echo 'Лондон';
} elseif ($country == 'Испания') {
    echo 'Мадрид';
} elseif ($country == 'Китай') {
    echo 'Пекин';
} else {
    echo 'Это неправильная страна';
}
?>
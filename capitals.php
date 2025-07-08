<?php
$capitals = ["Лондон", "Пекин", "Вашингтон", "Осло", "Токио"];

$my_file = fopen("capitals.txt", "w");

foreach ($capitals as $cap) {
    fwrite($my_file, $cap);
}

fclose($my_file);
<?php
$my_file = fopen("capitals.txt", "w");

fwrite($my_file, "Лондон");

fclose($my_file);

/* после выполнения кода 
в папке с PHP файлом будет находится файл capitals.txt
содержащий строку:
Лондон
*/
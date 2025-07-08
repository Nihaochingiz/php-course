<?php
$arr = array(6, 7, 8, 9, 10, 11, 12);
foreach ($arr as $val) {
    if ($val % 2 != 0) {
        continue;   
    } echo $val."\n";
}

/* выведет:
6
8
10
12
*/
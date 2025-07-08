<?php
$arr = array(2, 4, 6, 7, 8, 10, 12);
foreach ($arr as $val) {
    if ($val % 2 != 0) {
        break;
    } echo $val."\n";
}

/* выведет:
2
4
6
*/
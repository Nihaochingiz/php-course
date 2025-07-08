<?php

function temperatura($num, $string = 'градусов по Цельсию') {
    echo $num . ' ' . $string;
}

echo(temperatura(5));
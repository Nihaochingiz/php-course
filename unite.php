<?php

function unite($stringOne, $stringTwo, $stringThree)
{
    $result = $stringOne . " " . $stringTwo . " " . $stringThree;
    return $result;
}


echo(unite("Я", "Изучаю", "PHP"));
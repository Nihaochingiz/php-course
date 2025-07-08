<?php

function lowest_number($one, $two, $three) {
        if ($one <= $two && $one <= $three) {
            return $one;
        }
        elseif ($two <= $one && $two <= $three) {
            return $two;
        }
        else return $three;
}

echo (lowest_number(7, 10, 2));
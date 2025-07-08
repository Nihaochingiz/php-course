<?php
function win_or_lose($number) {
    if ($number== 3) {
        return "Победа";
    }
    elseif ($number== 0) {
        return "Поражение";
}
    elseif ($number== 1) {
        return "Ничья";
}
    return "Странное число";
}

echo(win_or_lose(1));
echo(win_or_lose(3));
echo(win_or_lose(123));
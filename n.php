<?php
$number = trim(fgets(STDIN)); // Считываем ввод пользователя

if ($number > 0) {
  echo (1);
}
elseif ($number == 0) {
   echo (0);
}
elseif ($number < 0) {
   echo (-1);
}
?>

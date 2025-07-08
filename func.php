<?php

function downer($x)
{
  for($i = 50; $i >= $x; $i -= 3) {
  }
  return $i;
}
echo downer(35);
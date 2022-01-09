<?php

$n = readline();

$m = array_map('floatval', explode(' ', $n));

for ($i = 0; $i < count($m); $i ++)
{
    printf('%.2f => %d', $m[$i], round($m[$i]));
   echo PHP_EOL;
}
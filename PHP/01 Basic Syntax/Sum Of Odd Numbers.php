<?php

$n = intval(readline());

$a = 0;
$b = 1;

for ($i = 1; $i <= $n; $i++)
{
    echo $b . PHP_EOL;
    $a += $b;
    $b += 2;
}

printf('Sum: %d', $a);
<?php

$n = intval(readline());
$m = intval(readline());
$sum = 0;

for ($i = $n; $i <= $m; $i++)
    {
        printf('%d ', $i);
        $sum += $i;
    }

echo PHP_EOL;
printf('Sum: %d', $sum);
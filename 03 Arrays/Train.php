<?php

$n = intval(readline());
$arr = [];
$sum = 0;

for ($i = 0; $i < $n; $i++)
{
    $m = intval(readline());
    $sum += $m;
    $arr[] = $m;
}

echo implode(' ', $arr).PHP_EOL;
echo $sum;
<?php

$n = readline();

$arr = array_map('intval', explode(' ', $n));

$m = [];

for ($i = 0; $i < count($arr); $i++)
{
    $first = 0;
    $last = 0;

    $first = array_shift($arr);
    $last = array_pop($arr);
    $m[] = ($first + $i) + ($last - $i);
}

if (count($arr) == 1)
{
    $m[] = $arr[0];
}

echo implode(' ', $m);
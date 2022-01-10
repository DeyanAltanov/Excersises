<?php

$n = readline();

$arr = array_map('floatval', explode(' ', $n));

for ($i = 0; $i < count($arr) - 1; $i++)
{
    if ($arr[$i] == $arr[$i + 1])
    {
        array_splice($arr, $i, 2, $arr[$i] * 2);
        $i = -1;
    }
}

echo implode(' ', $arr);
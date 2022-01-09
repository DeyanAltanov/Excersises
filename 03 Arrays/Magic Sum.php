<?php

$n = array_map('intval', explode(' ', readline()));
$m = intval(readline());

for ($i = 0; $i < count($n); $i++)
{
    for ($j = $i + 1; $j < count($n); $j++)
    {
        if ($n[$i] + $n[$j] == $m)
        {
            printf('%d %d', $n[$i], $n[$j]);
            echo PHP_EOL;
        }
    }
}
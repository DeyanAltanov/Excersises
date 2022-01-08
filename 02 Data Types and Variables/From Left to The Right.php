<?php

$n = readline();

for ($l = 0; $l < $n; $l++)
{
    $num = readline();
    $sum = 0;
    $sum2 = 0;

    $m = explode(' ',$num);
    $p = $m[0];
    $k = $m[1];

    for ($i = 0; $i < strlen($p); $i++)
    {
        $sum += intval($p[$i]);
    }

    for ($j = 0; $j < strlen($k); $j++)
    {
        $sum2 += intval($k[$j]);
    }

    if ($p > $k)
    {
        echo $sum.PHP_EOL;
    }
    else
    {
        echo $sum2.PHP_EOL;
    }
}
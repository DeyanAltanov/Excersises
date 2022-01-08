<?php

$n = intval(readline());

for ($i = 1; $i <= $n; $i ++)
{
    for ($j = 1; $j <= $i; $j++)
    {
        printf('%d ', $i);
    }
    echo PHP_EOL;
}
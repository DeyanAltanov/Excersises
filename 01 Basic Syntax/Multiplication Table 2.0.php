<?php

$n = intval(readline());
$m = intval(readline());

if ($m <= 10)
    {
        for ($i = $m; $i <= 10; $i++)
        {
            printf('%d X %d = %d' . PHP_EOL, $n, $i, $n * $i);
        }
    }
else if ($m > 10)
    {
            printf('%d X %d = %d' . PHP_EOL, $n, $m, $n * $m);
    }
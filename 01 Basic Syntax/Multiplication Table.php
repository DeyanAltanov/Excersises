<?php

$n = intval(readline());

for($i = 1; $i <= 10; $i++)
    {
        printf('%d X %d = %d' . PHP_EOL, $n, $i, $n * $i);
    }
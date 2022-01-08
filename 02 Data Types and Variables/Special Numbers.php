<?php

$n = intval(readline());

for ($i = 1; $i <= $n; $i++)
    {
        $nstring = strval($i);
        $sum = 0;
        for ($j = 0; $j < strlen($nstring); $j++)
        {
            $sum += $nstring[$j];
        }

        if ($sum == 5 || $sum == 7 || $sum == 11)
        {
            printf('%d -> True', $i);
            echo PHP_EOL;
        }
        else
        {
            printf('%d -> False', $i);
            echo PHP_EOL;
        }
    }
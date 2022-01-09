<?php

function getMultipleOfEvensAndOdds($n)
{
    $n = (string)abs($n);

    $sum = 0;
    $sum1 = 0;

    for ($i = 0; $i < strlen($n); $i++)
    {
        if ($n[$i] % 2 == 0)
        {
            $sum += $n[$i];
        }
        else
        {
            $sum1 += $n[$i];
        }
    }

    echo $sum * $sum1;
}

getMultipleOfEvensAndOdds(readline());
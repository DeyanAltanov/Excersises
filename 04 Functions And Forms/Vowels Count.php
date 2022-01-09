<?php

function vowelsCount($n)
{
    $n = strtolower($n);
    $m = 0;

    for ($i = 0; $i < strlen($n); $i++)
    {
        if ($n[$i] == 'a' || $n[$i] == 'e' || $n[$i] == 'i' || $n[$i] == 'o' || $n[$i] == 'u')
        {
            $m++;
        }
    }

    echo $m;
}

vowelsCount(readline());
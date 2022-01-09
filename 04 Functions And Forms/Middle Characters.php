<?php

function middleCharacters($n)
{
   $m = 0;
   $p = 0;

    for ($i = 0; $i < strlen($n); $i++)
    {
        $m += 1;
    }

    if ($m % 2 == 1)
    {
        $p = ceil($m / 2);
        $p = (int)$p;
        echo $n[$p-1];
    }
    else
    {
        $p = $m / 2;
        echo $n[$p -1 ].$n[$p];
    }
}

middleCharacters(readline());
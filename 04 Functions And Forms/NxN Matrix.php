<?php

function matrix($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $n; $j++)
        {
            echo "$n ";
        }
        echo PHP_EOL;
    }
}

matrix(intval(readline()));
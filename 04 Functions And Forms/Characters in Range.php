<?php

function charactersInRange($n, $m)
{
    $k = ord($n);
    $p = ord($m);

    if ($k < $p)
    {
        for ($i = $k + 1; $i < $p; $i++)
        {
            echo chr($i).' ';
        }
    }
    else
    {
        for ($i = $p + 1; $i < $k; $i++)
        {
            echo chr($i).' ';
        }
    }
}

charactersInRange(readline(), readline());
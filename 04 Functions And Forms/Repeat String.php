<?php

function repeat($a, $b)
{
    for ($i = 0; $i < $b; $i++)
    {
        echo $a;
    }
}

repeat(readline(), intval(readline()));
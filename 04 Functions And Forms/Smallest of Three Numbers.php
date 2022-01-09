<?php

function smallestOf3($n, $m, $p)
{
    if ($n < $m && $n < $p)
    {
        echo $n;
    }
    elseif ($m < $n && $m < $p)
    {
        echo $m;
    }
    else
    {
        echo $p;
    }
}

smallestOf3(intval(readline()), intval(readline()), intval(readline()));
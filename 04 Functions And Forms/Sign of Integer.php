<?php

function number($n)
{
    if ($n > 0)
    {
        echo "The number $n is positive.";
    }
    elseif ($n < 0)
    {
        echo "The number $n is negative.";
    }
    else
    {
        echo "The number $n is zero.";
    }
}

number(intval(readline()));
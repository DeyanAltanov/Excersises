<?php

function grade($n)
{
    if($n >= 2.00 && $n <= 2.99)
    {
        echo 'Fail';
    }
    elseif ($n >= 3.00 && $n <= 3.49)
    {
        echo 'Poor';
    }
    elseif ($n >= 3.50 && $n <= 4.49)
    {
        echo 'Good';
    }
    elseif ($n >= 4.50 && $n <= 5.49)
    {
        echo 'Very good';
    }
    elseif ($n >= 5.50 && $n <= 6.00)
    {
        echo 'Excellent';
    }
}

grade(floatval(readline()));
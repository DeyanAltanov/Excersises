<?php

$n = intval(readline());

if ($n %10 == 0)
    {
        echo 'The number is divisible by 10';
    }
else if ($n %7 == 0)
    {
        echo 'The number is divisible by 7';
    }
else if ($n %6 == 0)
    {
        echo 'The number is divisible by 6';
    }
else if ($n %3 == 0)
    {
        echo 'The number is divisible by 3';
    }
else if ($n %2 == 0)
    {
        echo 'The number is divisible by 2';
    }
else
    {
        echo 'Not divisible';
    }
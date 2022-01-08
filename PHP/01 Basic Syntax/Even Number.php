<?php

do
    {
        $n = intval(readline());

        if ($n % 2 == 0)
        {
            printf('The number is: %d', abs($n)); break;
        }
        else
        {
            echo 'Please write an even number.' . PHP_EOL;
        }
    }
while(true);
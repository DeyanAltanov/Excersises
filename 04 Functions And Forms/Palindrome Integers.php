<?php

$n = readline();

function palindrome($n)
{
    while ($n != 'END')
    {
        if ($n == strrev($n))
        {
            echo 'true'.PHP_EOL;
        }
        else
        {
            echo 'false'.PHP_EOL;
        }

        $n = readline();
    }
}

palindrome($n);
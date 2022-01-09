<?php

topNumber(intval(readline()));

function topNumber($n)
{
    for ($i = 1; $i <= $n; $i++)
    {
        $digit = 0;
        $sum = 0;
        $m = $i;
        $hasOdd = false;

        while ($m != 0)
        {
            $digit = $m % 10;

            $sum += $digit;
            if ($digit % 2 == 1)
            {
                $hasOdd = true;
            }

            $m = (int)$m / 10;
        }
        if ($sum % 8 == 0 && $hasOdd == true)
        {
            echo $i . PHP_EOL;
        }
    }
}
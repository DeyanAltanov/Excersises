<?php

$n = intval(readline());
$number = 1;
$digit = 0;
$arr[] = [];

unset($arr[0]);

for ($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $number; $j++)
    {
        if ($number == 1)
        {
            $arr[$i][$j] = 1;
        }
        elseif ($number == 2)
        {
            $arr[$i][$j] = 1;
        }
        else
        {
            if ($j == 1 || $j == $number)
            {
                $arr[$i][$j] = 1;
            }
            else
            {
                $arr[$i][$j] = $arr[$i - 1][$j] + $arr[$i - 1][$j - 1];
            }
        }
    }
    $number++;
}

for ($i = 1; $i <= count($arr); $i++)
{
    echo implode(' ', $arr[$i]) . PHP_EOL;
}
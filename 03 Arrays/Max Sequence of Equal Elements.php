<?php

$n = array_map('intval', explode(' ', readline()));
$bestLength = 0;
$bestNumber = 0;
$currentNumber = 0;

for ($i = 0; $i < count($n); $i++)
{
    $repeat = 1;
    for ($j = $i + 1; $j < count($n); $j++)
    {
        if($n[$i] == $n[$j])
        {
            $currentNumber = $n[$i];
            $repeat++;
        }
        else
        {
            break;
        }
    }

    if ($repeat > $bestLength)
    {
        $bestNumber = $currentNumber;
        $bestLength = $repeat;
    }
}

for ($i = 0; $i < $bestLength; $i++)
{
    printf('%d ', $bestNumber);
}
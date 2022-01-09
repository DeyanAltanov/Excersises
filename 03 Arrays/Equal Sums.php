<?php

$n = array_map('intval', explode(' ', readline()));

for ($i = 0; $i < count($n); $i++)
{
    $sum = 0;
    $sum2 = 0;

    for ($j = 0; $j < $i; $j++)
    {
        $sum += $n[$j];
    }
    for ($k = $i + 1; $k < count($n); $k++)
    {
        $sum2 += $n[$k];
    }

    if($sum == $sum2)
    {
        echo $i;
        return;
    }
}

echo 'no';
<?php

$n = array_map('intval', explode(' ', readline()));
$sum = 0;

for ($i = 0; $i < count($n); $i++)
{
    if ($n[$i] % 2 == 0)
    {
        $sum += $n[$i];
    }
}

echo $sum;
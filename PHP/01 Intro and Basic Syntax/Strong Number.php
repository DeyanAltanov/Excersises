<?php

$n = intval(readline());
$sum = 0;
$sum2 = $n;

while ($n >= 1)
{
    $digit = $n % 10;
    $factorial = 1;

    for($i = 1; $i <= $digit; $i++)
    {
        $factorial *= $i;
    }

    $sum += $factorial;
    $n = (int)$n / 10;
}

if ($sum == $sum2)
{
    echo 'yes';
}
else
{
    echo 'no';
}
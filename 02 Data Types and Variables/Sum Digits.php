<?php

$n = readline();
$sum = 0;

for ($i = 0; $i < strlen($n); $i++)
{
    $sum += $n[$i];
}

echo $sum;
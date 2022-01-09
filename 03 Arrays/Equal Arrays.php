<?php

$a = array_map('intval', explode(' ', readline()));
$b = array_map('intval', explode(' ', readline()));
$sum = 0;

for ($i = 0; $i < count($a); $i++)
{
    if ($a[$i] != $b[$i])
    {
        printf('Arrays are not identical. Found difference at %d index.', $i); break;
    }
    $sum += $a[$i];
}

if ($a == $b)
{
    printf('Arrays are identical. Sum: %d', $sum);
}
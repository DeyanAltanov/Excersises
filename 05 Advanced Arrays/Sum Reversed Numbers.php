<?php

$arr = explode(' ',readline());
$arr2 = [];
$sum = 0;

for ($i = 0; $i < count($arr); $i++)
{
    $arr2[] = strrev($arr[$i]);
    $sum += $arr2[$i];
}

echo $sum;
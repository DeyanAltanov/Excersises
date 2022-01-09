<?php

$arr = explode(' ', readline());

$n = intval(readline());

for ($i = 0; $i < $n; $i ++)
{
    $arr[] = $arr[$i];
    unset($arr[$i]);
}

echo implode(' ', $arr);
<?php

$n = intval(readline());
$arr = [];
$arr2 = [];

for ($i = 0; $i < $n; $i++)
{
    $m = explode(' ', readline());

    if ($i % 2 == 0)
    {
        $arr[] = $m[0];
        $arr2[] = $m[1];
    }
    else
    {
        $arr2[] = $m[0];
        $arr[] = $m[1];
    }
}

echo implode(' ', $arr).PHP_EOL;
echo implode(' ', $arr2);
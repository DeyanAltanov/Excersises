<?php

$n = explode(' ', readline());
$m = explode(' ', readline());
$arr = [];

for ($i = 0; $i < count($n); $i++)
{
    for ($j = 0; $j < count($m); $j++)
    {
        if ($n[$i] == $m[$j])
        {
            $arr[] = $m[$j];
        }
    }
}

echo implode(' ', $arr);
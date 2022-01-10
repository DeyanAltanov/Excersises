<?php

$n = readline();

$arr = array_map('intval', explode(' ',$n));

for ($i = 0; $i < count($arr); $i++)
{
    if ($arr[$i] < 0)
    {
        array_splice($arr, $i, 1);
        $i--;
    }
}

if (count($arr) == 0)
{
    echo 'empty';
}
else
{
    echo implode(' ',array_reverse($arr));
}
<?php

$n = readline();
$m = readline();

$arr = array_map('intval', explode(' ', $n));
$arr2 = array_map('intval', explode(' ', $m));


if (count($arr) > count($arr2))
{
    for ($i = 0; $i < count($arr); $i++)
    {
        $arr3[] = $arr[$i];
        if (isset($arr2[$i]))
        {
            $arr3[] = $arr2[$i];
        }
    }
}
else
{
    for ($i = 0; $i < count($arr2); $i++)
    {
        if (isset($arr[$i]))
        {
            $arr3[] = $arr[$i];
        }
        $arr3[] = $arr2[$i];
    }
}

echo implode(' ', $arr3);
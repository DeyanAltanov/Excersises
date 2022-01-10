<?php

$arr = array_map('intval', explode(' ',readline()));

$explode = array_map('intval', explode(' ',readline()));

$exist = 1;

$sum = 0;

while ($exist == 1)
{
    if (in_array($explode[0], $arr) == false)
    {
        break;
    }

    $index = array_search($explode[0], $arr);

    $startIndex = $index - $explode[1];

    if ($startIndex < 0)
    {
        $startIndex = 0;
    }

    array_splice($arr, $startIndex, $explode[1]);

    $index = array_search($explode[0], $arr);

    array_splice($arr, $index, $explode[1] + 1);

    for ($i = 0; $i < count($arr); $i++)
    {
        if ($arr[$i] == $explode[0])
        {
            $exist = 1; break;
        }
        else
        {
            $exist = 0;
        }
    }
}

for ($i = 0; $i < count($arr); $i++)
{
    $sum += $arr[$i];
}

echo $sum;
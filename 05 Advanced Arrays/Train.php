<?php

$n = readline();

$capacity = intval(readline());

$arr = array_map('intval', explode(' ', $n));

$command = strtolower(readline());

$c = explode(' ', $command);

while ($command != 'end')
{
    if ($c[0] == 'add')
    {
        array_push($arr, $c[1]);
    }
    else
    {
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] + $c[0] <= $capacity)
            {
                $arr[$i] += $c[0]; break;
            }
        }
    }

    $command = strtolower(readline());

    $c = explode(' ', $command);
}

echo implode(' ', $arr);
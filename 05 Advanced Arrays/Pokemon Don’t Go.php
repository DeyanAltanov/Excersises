<?php

$arr = array_map('floatval', explode(' ', readline()));

$index = intval(readline());

$lastIndex = 0;

$sum = 0;

while (count($arr) > 0)
{
    for ($i = 0; $i < count($arr); $i++)
    {
        $lastIndex = $i;
    }

    if ($index > $lastIndex)
    {
        $last = end($arr);
        array_splice($arr, $last, 1, $arr[0]);

        for ($i = 0; $i < count($arr); $i++)
        {
            $index = $i;
        }
    }

    if ($index >= 0)
    {
        $value = $arr[$index];
        $sum += $value;

        array_splice($arr, $index, 1);

        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] <= $value)
            {
                $arr[$i] += $value;
            }
            else
            {
                $arr[$i] -= $value;
            }
        }
    }
    else
    {
        $first = $arr[0];
        $sum += $first;

        $last = end($arr);

        array_splice($arr, 0, 1, $last);

        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] <= $first) {
                $arr[$i] += $first;
            } else {
                $arr[$i] -= $first;
            }
        }
    }

    if (empty($arr))
    {
        break;
    }

    $index = intval(readline());
}

echo $sum;
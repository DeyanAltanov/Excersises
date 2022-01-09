<?php

$gifts = explode(' ', readline());

$n = readline();

while ($n != 'No Money')
{
    $arr = explode(' ', $n);

    if ($arr[0] == 'OutOfStock')
    {
        for ($i = 0; $i < count($gifts); $i++)
        {
            if ($arr[1] == $gifts[$i])
            {
                $gifts[$i] = 'None';
            }
        }
    }
    if ($arr[0] == 'Required')
    {
        for ($j = 0; $j < count($gifts); $j++)
        {
            if($arr[2] >= 0 && $arr[2] < count($gifts))
            {
                $gifts[$arr[2]] = $arr[1];
            }
        }
    }
    if ($arr[0] == 'JustInCase')
    {
       $gifts[count($gifts) - 1] = $arr[1];
    }

    $n = readline();
}

for ($i = 0; $i < count($gifts); $i++)
{
    if ($gifts[$i] != 'None')
    {
        printf('%s ', $gifts[$i]);
    }
}
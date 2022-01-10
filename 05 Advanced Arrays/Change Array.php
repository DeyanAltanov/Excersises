<?php

$arr = array_map('intval', explode(' ', readline()));

$command = readline();

$c = explode(' ', $command);

while($c[0] != 'Even' && $c[0] != 'Odd')
{
    if ($c[0] == 'Delete')
    {
        for ($i = 0; $i < count($arr); $i++)
        {
            if ($arr[$i] == $c[1])
            {
                array_splice($arr, $i, 1);
            }
        }
    }
    elseif ($c[0] == 'Insert')
    {
        array_splice($arr, $c[2], 0, $c[1]);
    }


    $command = readline();

    $c = explode(' ', $command);
}

if ($c[0] == 'Odd')
{
    for ($i = 0; $i < count($arr); $i++)
    {
        if ($arr[$i] % 2 == 1)
        {
            echo $arr[$i].' ';
        }
    }
}
elseif ($c[0] == 'Even')
{
    for ($i = 0; $i < count($arr); $i++)
    {
        if ($arr[$i] % 2 == 0)
        {
            echo $arr[$i].' ';
        }
    }
}
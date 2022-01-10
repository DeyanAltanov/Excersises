<?php

$n = intval(readline());

$arr = [];

for ($i = 0; $i < $n; $i++)
{
    $command = explode(' ', readline());

    if ($command[2] == 'not')
    {
        if (in_array($command[0], $arr) == true)
        {
            for ($j = 0; $j < count($arr); $j++)
            {
                if ($arr[$j] == $command[0])
                {
                    array_splice($arr, $j, 1);
                }
            }
        }
        else
        {
            echo "$command[0] is not in the list!".PHP_EOL;
        }
    }
    else
    {
        if (in_array($command[0], $arr) == true)
        {
            echo "$command[0] is already in the list!".PHP_EOL;
        }
        else
        {
            $arr[] = $command[0];
        }
    }
}

for ($i = 0; $i < count($arr); $i++)
{
    echo $arr[$i].PHP_EOL;
}
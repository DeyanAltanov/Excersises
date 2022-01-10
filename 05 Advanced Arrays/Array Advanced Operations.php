<?php

$arr = array_map('intval', explode(' ', readline()));

$command = strtolower(readline());

$c = explode(' ', $command);

while ($command != 'end')
{
    switch ($c[0])
    {
        case 'add': array_push($arr, $c[1]); break;
        case 'insert':
            if ($c[2] < 0 || $c[2] > count($arr))
            {
                echo 'Invalid index'.PHP_EOL;
            }
            else
            {
                array_splice($arr, $c[2], 0, $c[1]);
            }
        break;
        case 'remove':
            if ($c[1] < 0 || $c[1] > count($arr))
            {
                echo 'Invalid index'.PHP_EOL;
            }
            else
            {
                array_splice($arr, $c[1], 1);
            }
        break;
        case 'shift':
            switch ($c[1])
            {
                case 'left':
                    for ($i = 0; $i < $c[2]; $i++)
                    {
                        $number = array_shift($arr);
                        array_push($arr, $number);
                    }
                break;
                case 'right':
                    for ($i = 0; $i < $c[2]; $i++)
                    {
                        $number = array_pop($arr);
                        array_unshift($arr, $number);
                    }
                break;
            }
        break;
    }

    $command = strtolower(readline());

    $c = explode(' ', $command);
}

echo implode(' ', $arr);
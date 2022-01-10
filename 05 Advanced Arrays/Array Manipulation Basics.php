<?php

$n = readline();

$command = strtolower(readline());

$c = explode(' ', $command);

$arr = array_map('intval', explode(' ', $n));

while ($command != 'end')
{
    switch ($c[0])
    {
        case 'add':
            array_push($arr, $c[1]);
            break;
        case 'remove':
            $p = array_search($c[1], $arr);
            unset($arr[$p]);
            break;
        case 'removeat':
            array_splice($arr, $c[1], 1);
            break;
        case 'insert':
            array_splice($arr, $c[2], 0, $c[1]);
            break;
    }

    $command = strtolower(readline());

    $c = explode(' ', $command);
}

echo implode(' ', array_filter($arr));

implode(' ', array_filter($arr));
<?php

$n = readline();

$command = strtolower(readline());

$c = explode(' ', $command);

$arr = array_map('intval', explode(' ', $n));

while ($command != 'end')
{
    switch ($c[0])
    {
        case 'contains':
            if (in_array($c[1], $arr) == true)
            {
                echo 'Yes'.PHP_EOL;
            }
            else
            {
                echo 'No such number'.PHP_EOL;
            }
        break;
        case 'print':
            switch ($c[1])
            {
                case 'even':
                    $a = [];
                    for ($i = 0; $i < count($arr); $i++)
                    {
                        if ($arr[$i] % 2 == 0)
                        {
                            $a[] = $arr[$i];
                        }
                    }
                    echo implode(' ', $a);
                    echo PHP_EOL;
                break;
                case 'odd':
                    $b = [];
                    for ($i = 0; $i < count($arr); $i++)
                    {
                        if ($arr[$i] % 2 == 1)
                        {
                            $b[] = $arr[$i];
                        }
                    }
                    echo implode(' ', $b);
                    echo PHP_EOL;
                break;
            }
        break;
        case 'get':
            $sum = 0;
            for ($i = 0; $i < count($arr); $i++)
            {
                $sum += $arr[$i];
            }
            echo $sum.PHP_EOL;
        break;
        case 'filter':
            switch ($c[1])
            {
                case '<':
                    $arr1 = [];
                    for ($i = 0; $i < count($arr); $i++)
                    {
                        if ($arr[$i] < $c[2])
                        {
                            $arr1[] = $arr[$i];
                        }
                    }
                    echo implode(' ', $arr1);
                    echo PHP_EOL;
                break;
                case '>':
                    $arr2 = [];
                    for ($i = 0; $i < count($arr); $i++)
                    {
                        if ($arr[$i] > $c[2])
                        {
                            $arr2[] = $arr[$i];
                        }
                    }
                    echo implode(' ', $arr2);
                    echo PHP_EOL;
                break;
                case '<=':
                    $arr3 = [];
                    for ($i = 0; $i < count($arr); $i++)
                    {
                        if ($arr[$i] <= $c[2])
                        {
                            $arr3[] = $arr[$i];
                        }
                    }
                    echo implode(' ', $arr3);
                    echo PHP_EOL;
                break;
                case '>=':
                    $arr4 = [];
                    for ($i = 0; $i < count($arr); $i++)
                    {
                        if ($arr[$i] >= $c[2])
                        {
                            $arr4[] = $arr[$i];
                        }
                    }
                    echo implode(' ', $arr4);
                    echo PHP_EOL;
                break;
            }
        break;
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
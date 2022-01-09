<?php

$elements = intval(readline());

$count = 2;

$output = 0;

$arr[] = [];

unset($arr[0]);

$arr[1][0] = 1;
$arr[1][1] = 1;

for ($i = 2; $i <= $elements + 1; $i++)
{


    $arr[$i][0] = ($arr[$i - 1][0]) + ($arr[$i - 1][1]);
    $count ++;
    if ($count == $elements)
    {
        break;
    }
    $arr[$i][1] = ($arr[$i][0]) + ($arr[$i - 1][1]);
    $count ++;
    if ($count == $elements)
    {
        break;
    }
}

for ($i = 1; $i <= count($arr); $i++)
{
    $output = end($arr[$i]);
}

if ($elements == 1 || $elements == 2)
{
    echo 1;
}
elseif($elements == 0)
{
    echo 0;
}
else
{
    echo $output.PHP_EOL;
}
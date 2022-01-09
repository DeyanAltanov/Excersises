<?php

$n = intval(readline());
$arr = [];

for ($j = 0; $j < $n; $j++)
{
    $name = readline();
    $sum = 0;

    for ($i = 0; $i < strlen($name); $i++)
    {
        $m = 0;

        if ($name[$i] == 'A' || $name[$i] == 'a' || $name[$i] == 'E' || $name[$i] == 'e' || $name[$i] == 'I' || $name[$i] == 'i'
            || $name[$i] == 'O' || $name[$i] == 'o' || $name[$i] == 'U' || $name[$i] == 'u')
        {
            $m = intval(ord($name[$i]) * strlen($name));
        }
        else
        {
            $m = intval(ord($name[$i]) / strlen($name));
        }

        $sum += $m;
    }

    $arr[] = $sum;
}

sort($arr);

for ($i = 0; $i < count($arr);$i++)
{
    echo $arr[$i].PHP_EOL;
}
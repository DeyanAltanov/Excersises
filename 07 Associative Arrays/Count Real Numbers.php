<?php

$arr = explode(' ', readline());

$numbers = [];

for ($i = 0; $i < count($arr); $i++)
{
    $key = $arr[$i];
    if (array_key_exists($key, $numbers))
    {
        $numbers[$key] ++;
    }
    else
    {
        $numbers[$key] = 1;
    }
}

ksort($numbers);

foreach ($numbers as $k => $v)
{
    echo "$k -> $v".PHP_EOL;
}
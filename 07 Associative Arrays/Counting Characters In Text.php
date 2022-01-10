<?php

$n = readline();
$arr = [];

for ($i = 0; $i < strlen($n); $i++)
{
    if (array_key_exists($n[$i], $arr))
    {
        $arr[$n[$i]]++;
    }
    else
    {
        $arr[$n[$i]] = 1;
    }
}

foreach ($arr as $k => $v)
{
    echo "$k -> $v".PHP_EOL;
}
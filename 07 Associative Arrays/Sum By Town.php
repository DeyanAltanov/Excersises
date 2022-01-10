<?php

$arr = explode(', ', readline());

$cities = [];

for ($i = 0; $i < count($arr); $i += 2)
{
    $key = $arr[$i];
    if (array_key_exists($key, $cities))
    {
        $cities[$key] += $arr[$i + 1];
    }
    else
    {
        $cities[$key] = 0;
        $cities[$key] += $arr[$i + 1];
    }
}

foreach ($cities as $key => $value)
{
    echo "$key => $value".PHP_EOL;
}
<?php

$arr = explode(' ', strtolower(readline()));

$languages = [];

for ($i = 0; $i < count($arr); $i++)
{
    $key = $arr[$i];

    if (array_key_exists($key, $languages))
    {
        $languages[$key]++;
    }
    else
    {
        $languages[$key] = 1;
    }
}

foreach ($languages as $k => $v)
{
    if ($v % 2 == 1)
    {
        echo $k.' ';
    }
}
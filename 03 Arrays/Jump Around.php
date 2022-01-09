<?php

$arr = explode(' ', readline());

$index = 0;
$value = $arr[0];
$result = $value;

while(true)
{
    if (array_key_exists($index, $arr))
    {
        if (array_key_exists($index + $value, $arr))
        {
            $index = $index + $value;
            $value = $arr[$index];
            $result += $value;
        }
        elseif (array_key_exists($index - $value, $arr))
        {
            $index = $index - $value;
            $value = $arr[$index];
            $result += $value;
        }
        else
        {
            echo $result;
            break;
        }
    }
}
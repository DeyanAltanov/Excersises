<?php

$n = intval(readline());

$users = [];

for ($i = 0; $i < $n; $i++)
{
    $arr = explode(' ', readline());

    if ($arr[0] == 'register')
    {
        if (!key_exists($arr[1], $users))
        {
            $users[$arr[1]] = $arr[2];
            echo "$arr[1] registered $arr[2] successfully" . PHP_EOL;
        }
        else
        {
            echo "ERROR: already registered with plate number $arr[2]".PHP_EOL;
        }
    }
    elseif ($arr[0] == 'unregister')
    {
        if (!key_exists($arr[1], $users))
        {
            echo "ERROR: user $arr[1] not found" . PHP_EOL;
        }
        else
        {
            unset($users[$arr[1]]);
            echo "$arr[1] unregistered successfully".PHP_EOL;
        }
    }
}

foreach ($users as $key => $value)
{
    echo "$key => $value".PHP_EOL;
}
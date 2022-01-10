<?php

$input = readline();
$companies = [];

while($input != 'End')
{
    $arr = explode('->', $input);

    if (!key_exists($arr[0], $companies))
    {
        $companies[$arr[0]] = [];
        $companies[$arr[0]][] = $arr[1];
    }
    else
    {
        if (in_array($arr[1], $companies[$arr[0]]) == false)
        {
            $companies[$arr[0]][] = $arr[1];
        }
    }

    $input = readline();
}

ksort($companies);

foreach ($companies as $company => $users)
{
    echo $company.PHP_EOL;
    for ($i = 0; $i < count($users); $i++)
    {
        echo "--$users[$i]".PHP_EOL;
    }
}
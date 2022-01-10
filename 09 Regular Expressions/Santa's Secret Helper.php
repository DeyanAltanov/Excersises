<?php

$key = intval(readline());

$pattern = '/@([A-Za-z]+)[^@\-!:>]*!([G,N])!/';

$names = [];

$input = readline();

while($input != 'end')
{
    $word = '';

    for ($i = 0; $i < strlen($input); $i++)
    {
        $char = ord($input[$i]) - $key;
        $char = chr($char);
        $word .= $char;
    }

    preg_match_all($pattern, $word, $arr);

    if (isset ($arr[0][0]))
    {
        $names[$arr[1][0]] = $arr[2][0];
    }

    $input = readline();
}

foreach ($names as $name => $behaviour)
{
    if ($behaviour == 'G')
    {
        echo $name.PHP_EOL;
    }
}
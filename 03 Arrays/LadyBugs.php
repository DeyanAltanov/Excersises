<?php

$n = intval(readline());

$arr = explode(' ', readline());

$cells = [];

for ($i = 0; $i < $n; $i++)
{
    $cells[$i] = 0;
}

for ($i = 0; $i < count($arr); $i++)
{
    if (array_key_exists($arr[$i], $cells))
    {
        $cells[$arr[$i]] = 1;
    }
}

ksort($cells);

$command = readline();

while ($command != 'end')
{
    $c = explode(' ', $command);

    if ($c[1] == 'right' && array_key_exists($c[0], $cells) && $cells[$c[0]] == 1)
    {
        if (array_key_exists($c[0] + $c[2], $cells))
        {
            for ($i = $c[0] + $c[2]; $i < count($cells); $i++)
            {
                if ($cells[$i] == 0)
                {
                    $cells[$i] = 1;
                    break;
                }
            }
        }
    }
    elseif ($c[1] == 'left' && array_key_exists($c[0], $cells) && $cells[$c[0]] == 1)
    {
        if (array_key_exists($c[0] - $c[2], $cells))
        {
            for ($i = $c[0] - $c[2]; $i >= 0; $i--)
            {
                if ($cells[$i] == 0)
                {
                    $cells[$i] = 1;
                    break;
                }
            }
        }
    }
    if (array_key_exists($c[0], $cells))
    {
        $cells[$c[0]] = 0;
    }
    $command = readline();
}

echo implode(' ', $cells);
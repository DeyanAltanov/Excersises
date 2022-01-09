<?php

$n = intval(readline());

function line($n)
{
    for ($i = 1; $i <= $n; $i++)
    {
        echo "$i ";
    }
    echo PHP_EOL;
}

for ($i = 1; $i <= $n; $i++)
{
    line($i);
}

for ($j = $n - 1; $j > 0; $j--)
{
    line($j);
}
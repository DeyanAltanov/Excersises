<?php

$material = readline();

$gold = [];

while ($material != 'stop')
{
    $carats = intval(readline());

    if (!key_exists($material, $gold))
    {
        $gold[$material] = $carats;
    }
    else
    {
        $gold[$material] += $carats;
    }

    $material = readline();
}

foreach ($gold as $material => $carats)
{
    echo "$material -> $carats"."K".PHP_EOL;
}
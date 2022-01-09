<?php

$n = intval(readline());
$m = [];

for($i = 0; $i < $n; $i++)
{
    $m[] = intval(readline());
}

$p = array_reverse($m);

for($j = 0; $j < count($p); $j++)
{
    printf('%d ', $p[$j]);
}
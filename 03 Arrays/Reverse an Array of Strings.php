<?php

$n = readline();
$m = explode(" ",$n);

$rev = array_reverse($m);

for ($i = 0; $i < count($rev); $i++)
{
    printf('%s ', $rev[$i]);
}
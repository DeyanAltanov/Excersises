<?php

$n = array();

$n[] = intval(readline());
$n[] = intval(readline());
$n[] = intval(readline());

rsort($n);

for ($i = 0; $i < count($n); $i++)
{
    echo $n[$i].PHP_EOL;
}
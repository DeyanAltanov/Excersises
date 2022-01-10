<?php

$remove = readline();
$string = readline();

$count = 1;

while($count > 0)
{
    $string = str_replace($remove, '', $string, $count);
}

echo $string;
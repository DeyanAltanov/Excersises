<?php

$arr = array_map('intval', explode(' ',readline()));

$string = readline();

while ($string != 'end')
{
    array_splice($arr, $string[0], 0, $string);

    $string = readline();
}

echo implode(' ', $arr);
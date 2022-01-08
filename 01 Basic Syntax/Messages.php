<?php

$n = intval(readline());
$word = '';

for ($i = 0; $i < $n; $i++)
{
    $number = readline();
    $length = strlen($number);
    $mainDigit = substr($number, -1);
    $offset = ($mainDigit - 2) * 3;
    if ($mainDigit == 8 || $mainDigit == 9)
    {
        $offset ++;
    }
    $index = ($offset + $length - 1);
    $letter = chr(97 + $index);
    if ($letter == '[')
    {
        $letter = ' ';
    }
    $word .= $letter;
}

echo $word;
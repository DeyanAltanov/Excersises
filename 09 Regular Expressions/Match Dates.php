<?php

$input = readline();

$pattern = '/\b\d{2}\b([\.\-\/])[A-Z]{1}[a-z]{2}(\1)\d{4}/';

$arr = [];

preg_match_all($pattern, $input, $arr);

for ($i = 0; $i < count($arr[0]); $i++)
{
    $arr[0][$i] = str_replace(['.', '-', '/'], ' ', $arr[0][$i]);
    $arr2 = explode(' ', $arr[0][$i]);
    echo "Day: $arr2[0], Month: $arr2[1], Year: $arr2[2]".PHP_EOL;
}
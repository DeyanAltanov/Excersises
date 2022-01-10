<?php

$pattern = $re = '/(^|(?<=\s))[a-zA-Z]+[-_.]?[a-zA-Z]*@[a-zA-Z-]+(\.[a-zA-Z]+)+/';

$input = readline();

$arr = [];

preg_match_all($pattern, $input, $arr);

for ($i = 0; $i < count($arr[0]); $i++)
{
    echo $arr[0][$i].PHP_EOL;
}
<?php

$input = readline();

$pattern = '((^|(?<=\s))-?\d+(\.\d+)?($|(?=\s)))';

$arr = [];

preg_match_all($pattern, $input, $arr);

echo implode(' ',$arr[0]);
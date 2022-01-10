<?php

$input = readline();

$pattern = '/\+359([\s-])2(\1)\d{3}(\1)\d{4}\b/';

$arr = [];

preg_match_all($pattern, $input, $arr);

echo implode(', ', $arr[0]);
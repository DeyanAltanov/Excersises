<?php

$input = readline();

$pattern = '/\b[A-Z][a-z]+\b \b[A-Z][a-z]+\b/';

$arr = [];

preg_match_all($pattern, $input, $arr);

echo implode(' ', $arr[0]);
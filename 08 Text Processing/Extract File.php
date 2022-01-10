<?php

$arr = explode('\\', readline());

$last = array_pop($arr);

$args = explode('.', $last);

$l = array_pop($args);

$f = implode('.', $args);

echo "File name: $f".PHP_EOL;
echo "File extension: $l".PHP_EOL;
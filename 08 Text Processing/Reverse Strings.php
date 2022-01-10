<?php

$input = readline();

while ($input != 'end')
{
    echo "$input = ".strrev($input).PHP_EOL;
    $input = readline();
}
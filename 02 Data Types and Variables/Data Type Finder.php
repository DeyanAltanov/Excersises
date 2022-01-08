<?php
$n = readline();

while ($n != 'END')
{
    if (filter_var("$n", FILTER_VALIDATE_INT) || filter_var("$n", FILTER_VALIDATE_INT) === 0)
    {
        echo "$n is integer type".PHP_EOL;
    }
    else if (filter_var("$n", FILTER_VALIDATE_FLOAT) || filter_var("$n", FILTER_VALIDATE_FLOAT) === 0.0)
    {
        echo "$n is floating point type".PHP_EOL;
    }
    else if (filter_var("$n", FILTER_VALIDATE_BOOLEAN)|| strtolower($n) == "false")
    {
        echo "$n is boolean type".PHP_EOL;
    }
    else if (strlen($n) == 1)
    {
        echo "$n is character type".PHP_EOL;
    }
    else
    {
        echo "$n is string type".PHP_EOL;
    }

    $n = readline();
}
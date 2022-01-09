<?php

$password = readline();

function validation($password)
{
    $m = 0;
    $p = strlen($password);

    if ($p < 6 || $p > 10)
    {
        echo 'Password must be between 6 and 10 characters' . PHP_EOL;
    }
    if (ctype_alnum($password) == false)
    {
        echo 'Password must consist only of letters and digits' . PHP_EOL;
    }
    for ($i = 0; $i < strlen($password) ; $i++)
    {
        if (ctype_digit($password[$i]) == true)
        {
            $m += 1;
        }
    }
    if ($m < 2)
    {
        echo 'Password must have at least 2 digits' . PHP_EOL;
    }
    else
    {
        echo 'Password is valid';
    }
}

validation($password);
<?php

function factorialDivision($n, $m)
{
    $factorial = 1;
    $factorial2 = 1;

    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    for ($j = 1; $j <= $m; $j++) {
        $factorial2 *= $j;
    }

    printf('%.2f', abs($factorial / $factorial2));
}

factorialDivision(intval(readline()), intval(readline()));
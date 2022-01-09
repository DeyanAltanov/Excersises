<?php

function calculate($a, $operator, $b)
{
    if ($operator == '+')
    {
        printf('%.2f',$a + $b);
    }
    elseif ($operator == '-')
    {
        printf('%.2f',$a - $b);
    }
    elseif ($operator == '*')
    {
        printf('%.2f',$a * $b);
    }
    elseif ($operator == '/')
    {
        printf('%.2f',$a / $b);
    }
}

calculate(intval(readline()), readline(), intval(readline()));
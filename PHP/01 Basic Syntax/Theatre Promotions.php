<?php

$day = strtolower(readline());
$age = intval(readline());

switch ($day)
        {
    case 'weekday':
        if($age >= 0 && $age <= 18)
        {
            echo '12$';
        }
        else if($age > 18 && $age <= 64)
        {
            echo '18$';
        }
        else if($age > 64 && $age <= 122)
        {
            echo '12$';
        } break;
    case 'weekend':
        if($age >= 0 && $age <= 18)
        {
            echo '15$';
        }
        else if($age > 18 && $age <= 64)
        {
            echo '20$';
        }
        else if($age > 64 && $age <= 122)
        {
            echo '15$';
        } break;
    case 'holiday':
        if($age >= 0 && $age <= 18)
        {
            echo '5$';
        }
        else if($age > 18 && $age <= 64)
        {
            echo '12$';
        }
        else if($age > 64 && $age <= 122)
        {
            echo '10$';
        } break;
        }

if ($age < 0 || $age > 122)
    {
        echo 'Error!';
    }
<?php

$n = intval(readline());
$people = strtolower(readline());
$day = strtolower(readline());

$totalprice = 0;

switch ($people)
{
    case 'students':
        switch ($day)
        {
            case 'friday': $totalprice = $n * 8.45; break;
            case 'saturday': $totalprice = $n * 9.80; break;
            case 'sunday': $totalprice = $n * 10.46; break;
        } break;
    case 'business':
        switch ($day)
        {
            case 'friday':
                if ($n >= 100)
                {
                    $n -= 10;
                }
                $totalprice = $n * 10.90; break;
            case 'saturday':
                if ($n >= 100)
                {
                    $n -= 10;
                }
                $totalprice = $n * 15.60; break;
            case 'sunday':
                if ($n >= 100)
                {
                    $n -= 10;
                }
                $totalprice = $n * 16; break;
        } break;
    case 'regular':
        switch ($day)
        {
            case 'friday': $totalprice = $n * 15; break;
            case 'saturday': $totalprice = $n * 20; break;
            case 'sunday': $totalprice = $n * 22.50; break;
        } break;
}

if ($n >= 30 && $people == 'students')
    {
        printf('Total price: %.2f', ($totalprice - ($totalprice * 0.15)));
    }
else if ($people == 'business')
    {
        printf('Total price: %.2f', ($totalprice));
    }
else if ($n >= 10 && $n <= 20 && $people == 'regular')
    {
        printf('Total price: %.2f', ($totalprice - ($totalprice * 0.05)));
    }
else
    {
        printf('Total price: %.2f', $totalprice);
    }
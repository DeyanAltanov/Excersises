<?php

function order ($product, $quantity)
{
    $coffeePrice = 1.50;
    $waterPrice = 1.00;
    $cokePrice = 1.40;
    $snacksPrice = 2.00;

    switch ($product)
    {
        case 'coffee': printf('%.2f', $quantity * $coffeePrice); break;
        case 'water': printf('%.2f', $quantity * $waterPrice); break;
        case 'coke': printf('%.2f', $quantity * $cokePrice); break;
        case 'snacks': printf('%.2f', $quantity * $snacksPrice); break;
    }
}

order(readline(), intval(readline()));
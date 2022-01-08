<?php

$n = strtolower(readline());
$spent = 0;
$left = $n;
$price = 0;

while ($n != 'game time')
{

    $n = strtolower(readline());

    if ($n == 'game time')
    {
        break;
    }

    switch ($n)
    {
        case 'outfall 4': $price = 39.99; break;
        case 'cs: og': $price = 15.99; break;
        case 'zplinter zell': $price = 19.99; break;
        case 'honored 2': $price = 59.99; break;
        case 'roverwatch': $price = 29.99; break;
        case 'roverwatch origins edition': $price = 39.99; break;
        default: echo "Not Found".PHP_EOL; break;
    }

    if ($price > $left)
    {
        echo 'Too Expensive'.PHP_EOL;
    }
    else
    {
        $spent += $price;
        $left -= $price;
        switch ($n)
        {
            case 'outfall 4': echo 'Bought OutFall 4'.PHP_EOL; break;
            case 'cs: og': echo 'Bought CS: OG'.PHP_EOL; break;
            case 'zplinter zell': echo 'Bought Zplinter Zell'.PHP_EOL; break;
            case 'honored 2': echo 'Bought Honored 2'.PHP_EOL; break;
            case 'roverwatch': echo 'Bought RoverWatch'.PHP_EOL; break;
            case 'roverwatch origins edition': echo 'Bought RoverWatch Origins Edition'.PHP_EOL; break;
        }
    }
}

if($left == 0.00)
{
    echo 'Out of money!'.PHP_EOL;
}
else
{
    printf('Total spent: $%.2f. Remaining: $%.2f', $spent, $left);
}
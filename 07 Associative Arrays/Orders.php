<?php

$input = readline();

$products = [];

while ($input != 'buy')
{
    $arr = explode(' ', $input);

    $product = $arr[0];

    if (isset($arr[1]))
    {
        $price = $arr[1];
    }
    if (isset($arr[2]))
    {
        $quantity = $arr[2];
    }

    if (!array_key_exists($product, $products))
    {
        $products[$product] = [];
        $products[$product][0] = $price;
        $products[$product][1] = $quantity;
    }
    else
    {
        if ($price != $products[$product][0])
        {
            $products[$product][0] = $price;
            $products[$product][1] += $quantity;
        }
        else
        {
            $products[$product][1] += $quantity;
        }
    }

    $input = readline();
}

foreach ($products as $product => $arr)
{
    printf('%s -> %.2f', $product, $arr[0] * $arr[1]);
    echo PHP_EOL;
}
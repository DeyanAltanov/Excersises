<?php

$pattern = '/%([A-Z]{1}[a-z]+)%[^|$%.]*<(\w+)>[^|$%.]*\|(\d+)\|[^|$%.0-9]*(\d+\.?\d+?)\$/';

$input = readline();

$customers = [];

$totalIncome = 0;

while ($input != 'end of shift')
{
    $valid = preg_match($pattern, $input, $customers);

    if ($valid == 1)
    {
        $price = $customers[3] * $customers[4];

        $price = number_format($price, 2);

        echo "$customers[1]: $customers[2] - $price" . PHP_EOL;

        $totalIncome += (float)$price;
    }

    $input = readline();
}

$totalIncome = number_format($totalIncome, 2);

echo "Total income: $totalIncome".PHP_EOL;
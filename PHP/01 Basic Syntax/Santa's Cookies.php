<?php

$batches = intval(readline());
$totalBoxes = 0;

for ($i = 1; $i <= $batches; $i++)
{
    $flour = intval(readline());
    $sugar = intval(readline());
    $cocoa = intval(readline());

    $flourCups = intval($flour / 140);
    $sugarSpoons = intval($sugar / 20);
    $cocoaSpoons = intval($cocoa / 10);

    $min = min($flourCups, $sugarSpoons, $cocoaSpoons);

    $totalCookies = intval((170 * $min) / 25);

    $boxesCookies = intval($totalCookies / 5);

    if ($boxesCookies > 0)
    {
        printf('Boxes of cookies: %d',  $boxesCookies);
        echo PHP_EOL;
    }
    else
    {
        echo "Ingredients are not enough for a box of cookies.";
        echo PHP_EOL;
    }

    $totalBoxes += $boxesCookies;
}

printf('Total boxes: %d', $totalBoxes);
<?php

$snowballNumber = intval(readline());
$bestsnowballSnow = 0;
$bestsnowballTime = 0;
$bestsnowballQuality = 0;
$bestsnowballValue = 0;

for ($i = 1; $i <=$snowballNumber; $i++ )
{
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());

    $snowballValue = bcpow($snowballSnow / $snowballTime,  $snowballQuality);
    if ($snowballValue > $bestsnowballValue)
    {
        $bestsnowballValue = $snowballValue;
        $bestsnowballSnow = $snowballSnow;
        $bestsnowballTime = $snowballTime;
        $bestsnowballQuality = $snowballQuality;
    }
}

echo "$bestsnowballSnow : $bestsnowballTime = $bestsnowballValue ($bestsnowballQuality)";
<?php

$power = intval(readline());
$power1 = $power;
$distance = intval(readline());
$exhaustion = intval(readline());
$targets = 0;

while ($power >= $distance)
{
    $power -= $distance;
    $targets += 1;
        if ($power == (0.5 * $power1))
        {
            $power = intval($power / $exhaustion);
        }
}

echo $power.PHP_EOL;
echo $targets;
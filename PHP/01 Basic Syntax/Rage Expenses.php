<?php

$games = intval(readline());
$headset = floatval(readline());
$mouse = floatval(readline());
$keyboard = floatval(readline());
$display = floatval(readline());

$sum = 0;
$key = 0;

for ($i=1; $i <= $games; $i++)
    {
        if ($i % 2 == 0)
        {
            $sum += $headset;
        }
        if ($i % 3 == 0)
        {
            $sum += $mouse;
        }
        if ($i % 2 == 0 && $i % 3 == 0)
        {
            $sum += $keyboard;
            $key += 1;
            if ($key % 2 == 0)
            {
                $sum += $display;
            }
        }
    }

printf('Rage expenses: %.2f lv.', $sum);
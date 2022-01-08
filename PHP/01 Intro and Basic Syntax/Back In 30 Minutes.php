<?php

$hours = intval(readline());

$mins = intval(readline());

$mins += 30;

if ($mins >= 60)
    {
        $mins -= 60;
        $hours ++;
    }
if ($hours > 23)
    {
        $hours = 0;
    }

printf('%d:%02d',
        $hours, $mins);
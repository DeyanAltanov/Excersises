<?php

$centuries = intval(readline());

$years = $centuries * 100;

$days = (int)$years * 365.2422;

$hours = (int)$days * 24;

$minutes = (int)$hours * 60;

printf('%d centuries = %d years = %d days = %d hours = %d minutes', $centuries, $years, $days, $hours, $minutes);
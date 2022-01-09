<?php

$n = explode(' ', readline());
$m = [];

for ($i = 0; $i < count($n); $i++)
{
    $top = true;
    for ($j = $i + 1; $j < count($n); $j++ )
    {
        if ($n[$i] <= $n[$j])
        {
            $top = false; break;
        }
    }

    if ($top == true)
    {
        $m[] = $n[$i];
    }
}

echo implode(' ', $m);